'use strict';


var Provider =  require('react-redux');
var App = require('./modules/models/client/components/main/App');
var store = require('./modules/models/client/store');
var  remote = require('remote');
//import { ipcRenderer } from 'electron';

require('./styles/global.scss');

ipcRenderer.on('action', function (evt, type, data) {
  if ($('.Modal').length && type.indexOf('Instance') !== -1) {
    return;
  }
  store.dispatch({ type, data });
});

document.addEventListener('DOMContentLoaded', function () {
  remote.getCurrentWindow().show();
});

ReactDOM.render(
  <Provider store={store}>
    <App />
  </Provider>,
  document.getElementById('content')
);
