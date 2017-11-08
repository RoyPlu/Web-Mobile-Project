import React, { Component } from 'react';
import AppBar from 'material-ui/AppBar';
import Drawer from 'material-ui/Drawer';
import MenuItem from 'material-ui/MenuItem';
import {
    BrowserRouter as Router,
    Route,
    Link
} from 'react-router-dom';
import DashboardPage from './dashboard/dashboard.page';
import LocationsPage from './locations/locations.page';
import LocationPage from './locations/location.page';
import LocationsAddPage from './locations/locations-add.page';
import ProblemsPage from './problems/problems.page';
import ProblemsAddPage from './problems/problems-add.page';
import ScoresPage from './scores/scores.page';
import ScoresAddPage from './scores/scores-add.page';
import EndDateProblemForms from './enddateproblemforms/enddateproblemforms.page';
import EndDateProblemFormsAddPage from './enddateproblemforms/enddateproblemforms-add.page';
import StatusPage from './status/status.page';
import StatusAddPage from './status/status-add.page';
import { connect } from 'react-redux';

class Layout extends Component {
    constructor() {
        super();
        this.state = { drawerOpen: false };
    }
    toggleState = () => {
        const currentState = this.state.drawerOpen;
        this.setState({ drawerOpen: !currentState });
    }
    render() {
        return (
            <Router>
                <div>

                    <AppBar
                        title={this.props.title}
                        onLeftIconButtonTouchTap={this.toggleState}
                    />
                    <Drawer open={this.state.drawerOpen}>
                        <MenuItem onClick={this.toggleState} >
                            <Link to="/">Dashboard</Link>
                        </MenuItem>
                        <MenuItem onClick={this.toggleState} >
                            <Link to="/locations">Locations</Link>
                        </MenuItem>

                    </Drawer>
                    <Route exact={true} path="/" component={DashboardPage} />
                    <Route exact={true} path='/locations' component={LocationsPage}/>
                    <Route exact={true} path='/locations/:locationId' component={LocationPage}/>
                    <Route exact={true} path='/locations/:locationId/problems' component={ProblemsPage}/>
                    <Route exact={true} path="/addlocation" component={LocationsAddPage} />
                    <Route exact={true} path="/addproblemmessage" component={ProblemsAddPage} />
                    <Route exact={true} path="/addscore" component={ScoresAddPage} />
                    <Route exact={true} path="/addstatusmessage" component={StatusAddPage} />
                    <Route exact={true} path="/addenddateproblemform" component={EndDateProblemFormsAddPage} />
                    <Route path='/locations/:locationId/status' component={StatusPage}/>
                    <Route path='/locations/:locationId/scores' component={ScoresPage}/>
                    <Route path="/statusmessages" component={StatusPage} />
                    <Route exact path='/problemmessages' component={ProblemsPage}/>
                    <Route path='/problemmessages/:problemMessageId/enddate' component={EndDateProblemForms}/>
                </div>
            </Router>
        );
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        title: state.title,
    }
};

export default connect(mapStateToProps)(Layout);
