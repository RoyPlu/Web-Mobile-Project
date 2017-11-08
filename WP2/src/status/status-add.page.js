import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
import TextField from 'material-ui/TextField';
import DatePicker from 'material-ui/DatePicker';
import FlatButton from 'material-ui/FlatButton';
import HttpService from '../common/http-service';
import { Link } from 'react-router-dom';
import moment from 'moment';

class StatusAddPage extends Component {
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
                    <TextField hintText="locationId" name="locationId" />
                    <TextField hintText="status" name="status" />
                    <DatePicker hintText="date" name="date" />
                    <FlatButton label="Add StatusMessage" type="submit" />
                </form>
                {this.state.showMessage ? message : null}
            </div>
        );
    }
    save = (ev) => {
        ev.preventDefault();
        console.log(ev);
        let date = ev.target['date'].value;
        let locationId = ev.target['locationId'].value;
        let status = ev.target['status'].value;
        // date in juiste formaat YYYY-MM-dd => ddMMYYYY
        //let momentDate = moment(date);
        //let dateToSend = momentDate.format('DDMMYYYY');
        HttpService.addStatusMessageEntry(locationId, status, date);
        this.setState({ showMessage: true });
    };
    componentDidMount() {
        this.props.setTitle('Add Status');
    }
}

const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        ...mapDispatchToPropsTitle(dispatch, ownProps),
        addEntry: (entry) => {
            dispatch({ type: 'ADD_PROBLEMENTRY', payload: entry });
        }
    }
};

export default connect(undefined, mapDispatchToProps)(StatusAddPage)
