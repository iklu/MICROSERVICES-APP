const session = require('electron').remote.session;
    const ses = session.fromPartition('persist:name');

    //debugger;
    // Query all cookies associated with a specific url.
    ses.cookies.get({}, (error, cookies) => {

        console.log(cookies[0].name); /// cookies values should be printed next time the applciation is launched.
    });

    // Set a cookie with the given cookie data;
    // may overwrite equivalent cookies if they exist.
    const cookie = {
        url: 'http://192.168.0.159/',
        name: 'dummy_name',
        value: 'dummy',
        expirationDate: 2093792393999
    };
    ses.cookies.set(cookie, (error) => {
        //debugger;

        if (error)
            console.error(error);
    });