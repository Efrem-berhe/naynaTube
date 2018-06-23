import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
          <div>

            <div className="jumbotron">
              <div className="container">
                <h1 className="display-3"></h1>
                <p className="text-center">EducationRohn zal objectieve kwaliteitsvolle lessen met een lage instapdrempel aanbieden aan jong volwassen. Deze zullen ondersteund worden met een algemeen platform vol relevante info oa blog, (live)events en workshops.</p>
                <hr/>
              </div>
            </div>

            <div className="container mb-2">
              <div className="row">
                <div className="col-md-6">
                  <h2>Sponsoring</h2>
                  <p>Heeft u interesse om ons project te steunen en op deze manier uw organisatie in de kijker te zetten? Op dit moment zijn nog zoekende naar een relevante hoofdsponsor en sponsors voor onze specifieke lessen : starten met investeren, alleen wonen, inleiding tot belastingen, investeren in vastgoed en eerste stappen in de werkomgeving : CV en sollicitatie.
                  Voor meer info, gelieve ons te contacteren. </p>
                </div>
                <div className="col-md-2"></div>
                <div className="col-md-3">
                  <h2>Contact</h2>
                  <p>E:educationrohn@gmail.com</p>
                  <p>Phone: +32 479 84 55 88</p>
                </div>

              </div>
          </div>

        </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
