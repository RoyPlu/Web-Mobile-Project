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
            <div>
                <form onSubmit={this.save}>
                    <TextField hintText="Name" name="Name" />
                    <FlatButton label="Default" type="submit" />
                </form>
                {this.state.showMessage ? message : null}
            </div>
        );
    }
    save = (ev) => {
        ev.preventDefault();
        const name = ev.target['name'].value;
        const id = HttpService.getId();
        HttpService.addLocationEntry(name, id).then(() => {
            this.props.addEntry({
                "id": id,
                "name": name
            });
            this.setState({ showMessage: true });
        });
    }
    componentDidMount() {
        this.props.setTitle('Update Location');
    }
}

const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        ...mapDispatchToPropsTitle(dispatch, ownProps),
        addEntry: (entry) => {
            dispatch({ type: 'ADD_LOCATIONENTRY', payload: entry });
        }
    }
}

export default connect(undefined, mapDispatchToProps)(LocationsAddPage)
