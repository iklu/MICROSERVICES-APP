  var GRID = React.createClass({displayName: 'GRID',
         	render: function() {
           	var grid = this.props.grid;
           	var rows = [];
           	for(var line = 0; line < grid; line++){
             	var length = Math.floor(Math.random() * 100 + 1);
             	var row =[];
                 for(var i =0; i< length; i++){
                     row.push(React.DOM.td(null, i))
             	}
                 rows.push(
                   React.DOM.tr( {},
                     row
               	))
           	}
           	return (
                 React.DOM.table(null,
                   React.DOM.tbody(null,rows)
             	)
            );
         	}
      });