'use strict';

import React from 'react';
import StringContent from './StringContent';
import ListContent from './ListContent';
import SetContent from './SetContent';
import HashContent from './HashContent';
import ZSetContent from './ZSetContent';

require('./index.scss');

class KeyContent extends React.Component {
  constructor() {
    super();
    this.state = {};
  }

  render() {
    const props = { key: this.props.keyName, ...this.props };
    let view;
    switch (this.props.keyType) {
    case 'string': view = <StringContent {...props} />; break;
    case 'list': view = <ListContent {...props} />; break;
    case 'set': view = <SetContent {...props} />; break;
    case 'hash': view = <HashContent {...props} />; break;
    case 'zset': view = <ZSetContent {...props} />; break;
    case 'none':
      view = <div className="notfound">
        <span className="icon icon-trash"></span>
        <p>The key has been deleted</p>
      </div>;
      break;
    }
    return <div style={this.props.style} className="BaseContent">{ view }</div>;
  }
}

export default KeyContent;
