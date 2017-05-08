    const remote = require('electron').remote;
    const Menu = remote.Menu;
    const MenuItem = remote.MenuItem;
    const clipboard = require('electron').clipboard; 
    const {dialog} = require('electron').remote;
        

    var menu = new Menu();
    menu.append(new MenuItem({ label: 'Meniu', click: function() { console.log('item 1 clicked'); }}));
    menu.append(new MenuItem({ type: 'separator' }));
    menu.append(new MenuItem({ label: 'Copie', click: function() { console.log(clipboard.readText('selection')); clipboard.writeText(clipboard.readText('selection'));}, selector: "copy:" })); 
    menu.append(new MenuItem({ label: 'Adauga', type: 'checkbox', checked: true }));
    menu.append(new MenuItem({ label: 'Inspecteaza element', click: () => { remote.getCurrentWindow().inspectElement(rightClickPosition.x, rightClickPosition.y) }}));

    window.addEventListener('contextmenu', function (e) {
      e.preventDefault();
      rightClickPosition = {x: e.x, y: e.y}
      menu.popup(remote.getCurrentWindow());
    }, false);
        
  
Menu.setApplicationMenu(menu);

        var setDevMenu = function () {
            var devMenu = remote.Menu.buildFromTemplate([
            {
                label: 'In curs de dezvoltare',
                    submenu: [{
                        label: 'Reincarcare',
                        accelerator: 'CmdOrCtrl+R',
                        click: function () {
                            remote.BrowserWindow.getFocusedWindow().webContents.reloadIgnoringCache();
                        }
                    },{
                        label: 'Toggle DevTools',
                        accelerator: 'Alt+CmdOrCtrl+I',
                        click: function () {
                            remote.BrowserWindow.getFocusedWindow().toggleDevTools();
                        }
                    },
                    {
                        label: 'Informatii',
                        accelerator: 'CmdOrCtrl+Q',
                        click: function (item, focusedWindow) {
                            // dialog.showMessageBox({message: 'Aplicatie facut cu electron', buttons: ['OK'] })
                            document.getElementById("info").innerHTML = "New text!";
                        }
                    },
                    {
                        label: 'Buton',
                        accelerator: 'CmdOrCtrl+d',
                        click: function (item, focusedWindow) {
                             dialog.showMessageBox({message: 'Aplicatie facut cu electron', buttons: ['OK'] });
                         
                        }
                    },
                    {
                        label: 'Upload',
                        accelerator: 'CmdOrCtrl+d',
                        click: function (item, focusedWindow) {
                             dialog.showOpenDialog({properties: ['openFile', 'openDirectory', 'multiSelections']});
                         
                        }
                    },
                     {
                        label: 'Eroare',
                        accelerator: 'CmdOrCtrl+d',
                        click: function (item, focusedWindow) {
                             dialog.showErrorBox('Titlul erorii', 'Continut');
                         
                        }
                    },
                    {
                        label: 'Inchide',
                        accelerator: 'CmdOrCtrl+Q',
                        click: function () {
                            remote.app.quit();
                        }
                    }],    
                },
                    { 
                    label: 'Logare',
                    submenu: [{
                        label: 'Dashboard',
                        accelerator: 'CmdOrCtrl+R',
                        click: function () {
                            //remote.BrowserWindow.getFocusedWindow().loadUrl('http://meineke-dash.beta-directory.com/login');
                        }
                    },{
                        label: 'Meineke Rewards',
                        accelerator: 'Alt+CmdOrCtrl+I',
                        click: function (item, focusedWindow) {
                            //remote.BrowserWindow.loadUrl('http://dev.meineke-redesign.beta-directory.com/rewards/login/');
                        }
                    },
                    {
                        label: 'Github',
                        accelerator: 'CmdOrCtrl+Q',
                        click: function () {
                            //remote.BrowserWindow.loadUrl('https://github.com');
                        }
                    },
                    {
                        label: 'Quit',
                        accelerator: 'CmdOrCtrl+Q',
                        click: function () {
                            remote.app.quit();
                        }
                    }]        
                },
            ]);
            remote.Menu.setApplicationMenu(devMenu);
        };
        setDevMenu();

        var devHelper = {
            setDevMenu: setDevMenu,
        }