import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
          <div>

            <div className="jumbotron">
              <div className="container">
                <h1 className="display-3">Learn, Where ever you go!</h1>
                <p>EducationRohn zal objectieve kwaliteitsvolle lessen met een lage instapdrempel aanbieden aan jong volwassen. Deze zullen ondersteund worden met een algemeen platform vol relevante info oa blog, (live)events en workshops.</p>
                <p><a className="btn btn-primary btn-lg" href="#" role="button">Read more &raquo;</a></p>
              </div>
            </div>

            <div className="container mb-2">
              <div className="row">
                <div className="col-md-1"></div>
                <div className="col-md-5">
                  <h2>Sponsoring</h2>
                  <p>Heeft u interesse om ons project te steunen en op deze manier uw organisatie in de kijker te zetten? Op dit moment zijn nog zoekende naar een relevante hoofdsponsor en sponsors voor onze specifieke lessen : starten met investeren, alleen wonen, inleiding tot belastingen, investeren in vastgoed en eerste stappen in de werkomgeving : CV en sollicitatie.
                  Voor meer info, gelieve ons te contacteren. </p>
                </div>
                <div className="col-md-3"></div>

                <div className="col-md-3">
                  <h2>Contact</h2>
                  <p>E:educationrohn@gmail.com</p>
                  <p>Phone: +32 479 84 55 88</p>
                </div>
              </div>
          </div>

            <div className="container">
            <div className ="heading-title text-center">
                <h3 className ="text-uppercase mb-3">Meet Our Team </h3>
            </div>
              <div className="row">
                <div className="col-md-1"></div>
                <div className ="col-md-3 col-sm-3">

                        <div className ="team-img">
                            <img className="rounded-circle" width="200" height="200" src="./img/lan.jpg" alt="team member" class="img-responsive"/>
                        </div>

                    <div className ="team-title">
                        <h5>Lan Vanardennen</h5>
                        <span>founder & ceo</span>
                    </div>
                </div>
                <div className="col-md-1"></div>

                <div className ="col-md-4 col-sm-4">

                        <div className ="team-img">
                            <img className="rounded-circle" width="200" height="200" src="./img/lara.jpg" alt="team member" class="img-responsive"/>
                        </div>

                    <div className ="team-title">
                        <h5>Laura Da Silva</h5>
                        <span>Marketing Manager</span>
                    </div>
                </div>

                <div className ="col-md-3 col-sm-3">

                        <div className ="team-img">
                            <img className="rounded-circle" width="200" height="200" src="./img/ephi.jpg" alt="team member" class="img-responsive"/>
                        </div>


                    <div className ="team-title">
                        <h5>Efrem Gebremedhin</h5>
                        <span>Web development</span>
                    </div>
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
