import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
          <div>

          <div className="col-12">
              <div className="video"><iframe width="805" height="453" src="https://www.youtube.com/embed/jV8B24rSN5o" frameBorder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe></div>
      	  </div>

          <div className="col py-2">
      	    <div className="video"><iframe src="https://www.youtube.com/embed/I39RKjerJss?rel=0&showinfo=0" frameBorder="0" allowFullScreen></iframe></div>
  		    </div>

          <div className="col py-2">
              <div className="video"><iframe src="https://www.youtube.com/embed/Dkx4LYeFnVY?rel=0&showinfo=0" frameBorder="0" allowFullScreen></iframe></div>
  		    </div>

        </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
