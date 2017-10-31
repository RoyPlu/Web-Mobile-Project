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
import CaloriesAddPage from './locations/calories-add.page';
import ProblemsPage from './problems/problems.page';
import SettingsPage from './settings/settings.page';
import StatusPage from './status/status.page';
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
                        <MenuItem onClick={this.toggleState} >
                            <Link to="/statusmessages">Status Message</Link>
                        </MenuItem>
                        <MenuItem onClick={this.toggleState} >
                            <Link to="/problemmessages">Problem Message</Link>
                        </MenuItem>
                    </Drawer>
                    <Route exact={true} path="/" component={DashboardPage} />
                    <Route path="/locations" component={LocationsPage} />
                    <Route path="/statusmessages" component={StatusPage} />
                    <Route path="/problemmessages" component={ProblemsPage} />
                    <Route path="/calories/add" component={CaloriesAddPage} />
                    <Route path="/settings" component={SettingsPage} />

                </div>
            </Router>
        );
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        title: state.title,
    }
}

export default connect(mapStateToProps)(Layout);
