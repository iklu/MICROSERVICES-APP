const path = require('path');
const notifier = require('../notifier/notifier');
const Crimson = require('crimson');
const crimson = new Crimson({ path: path.join(__dirname, 'logs') });
const electron = require('../../electron-window');
const locale = require('../../resources/lang.json');
const settings = require('../../settings.json');
const lang = settings.lang;

function sound(data) {
    if (data.type == 1 || data.situation == 2)
        return 'Submarine';
    else if (data.alarm)
        return 'denwa';
    else
        return 'alert';
}

function situation(data) {
    if (data.situation == 1)
        return locale[lang].units.final;
    else
        return '#' + data.revision;
}

function template_data(data) {
    console.log(locale[lang].pushNotification);
    if (data.type == 1 || data.situation == 2)
        return ['', locale[lang].cancelled];
    else {
        var message_template = locale[lang].pushNotification.notification.android.alert + ': ' + data.notification.android.alert + '    '+ locale[lang].pushNotification.notification.android.extra.content + ': ' + data.notification.android.extra.content ;

        if (lang == 'ro')
            return [data.device_types + ' (' + data.audience.ios_channel + ')', message_template];
        else
            return [data.device_types+ ' (' + data.audience.ios_channel + ')', message_template];
    }
}

function spawnMap(data, template) {
    if (data.revision == 1 && (electron.alertRevision[data.earthquake_id] === undefined || data.revision > electron.alertRevision[data.earthquake_id]) && electron.electronReady === true)
        electron.newWindow(data);
    else if (electron.electronReady === true) {
        if (electron.alertWindows[data.earthquake_id] === undefined)
            electron.newWindow(data);
        else if (electron.alertRevision[data.earthquake_id] !== undefined && data.revision > electron.alertRevision[data.earthquake_id])
            electron.alertRevision[data.earthquake_id] = data.revision;
    }

    if (electron.alertWindows[data.earthquake_id] == 'closed') return;

    var webContent = electron.alertWindows[data.earthquake_id].webContents;

    if (webContent.isLoading())
        webContent.on('did-finish-load', () => webContent.send('data', [data, template, locale]));
    else
        webContent.send('data', [data, template, locale]);
}

exports.parse = function(input) {
    var date = new Date();
    var data = typeof input === 'object' ? input : JSON.parse(input);
    try {
        var sound_string = sound(data);
        var situation_string = situation(data);
        var template = template_data(data);
        var subtitle = template[0];
        var message = template[1];

        if (data.testing) crimson.debug('Testing the app, Parsing Fake Notification...');
        crimson.info(data.device_types + ' - ' + data.audience.ios_channel);
        crimson.info(data.notification.android.alert + ' ' + situation_string + ', ' + locale.en.pushNotification.notification.android.type + ': ' + data.notification.android.type + ', ' + locale.en.pushNotification.notification.android.extra.content + ': ' + data.notification.android.extra.content);

        // Enable Notifications
        if (settings.enable_notifications && date.getHours() < '06' && !data.alarm) {
            crimson.debug('Enable Notifications...');
            notifier.notify(locale[lang].title, subtitle, message, false);
            spawnMap(data, template);
        } else {
            if (settings.enable_notifications && date.getHours() < '06' && data.alarm) crimson.debug('Enable Notifications...');
            notifier.notify(locale[lang].title, subtitle, message, sound_string);
            spawnMap(data, template);
        }
    } catch(error) {
        notifier.notify(locale[lang].title, '', locale[lang].error + ': ' + error.message, false);
        crimson.error(error);
        throw error;
    }
};
