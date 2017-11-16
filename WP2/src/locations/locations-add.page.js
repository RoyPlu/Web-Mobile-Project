import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
import TextField from 'material-ui/TextField';
import DatePicker from 'material-ui/DatePicker';
import FlatButton from 'material-ui/FlatButton';
import HttpService from '../common/http-service';
import { Link } from 'react-router-dom';
import moment from 'moment';

class LocationsAddPage extends Component {
    constructor() {
        super();
        this.state = { showMessage: false };
    }
    render() {
        const message = (
            <div>
                <span>Entry toegevoegd, klik <Link to='/locations'>hier</Link> om terug te gaan.</span>
            </div>
        );
        return (
            <div class="formDesign">
                <form onSubmit={this.save}>
                    <TextField hintText="Name" name="name" id="name" />
                    <FlatButton label="Add Location" type="submit" />
                </form>
                {this.state.showMessage ? message : null}
            </div>
        );
    }
    save = (ev) => {
        ev.preventDefault();
        let name = ev.target['name'].value;
        HttpService.addLocationEntry(name);
        this.setState({ showMessage: true })
    };
    componentDidMount() {
        this.props.setTitle('Add Location');
    }
}

const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        ...mapDispatchToPropsTitle(dispatch, ownProps),
        addEntry: (entry) => {
            dispatch({ type: 'ADD_LOCATIONENTRY', payload: entry });
        }
    }
};

export default connect(undefined, mapDispatchToProps)(LocationsAddPage)
