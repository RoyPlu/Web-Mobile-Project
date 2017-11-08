import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
import TextField from 'material-ui/TextField';
import DatePicker from 'material-ui/DatePicker';
import FlatButton from 'material-ui/FlatButton';
import HttpService from '../common/http-service';
import { Link } from 'react-router-dom';
import moment from 'moment';

class ProblemsAddPage extends Component {
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
                    <TextField hintText="locationId" name="locationId" />
                    <TextField hintText="description" name="description" />
                    <TextField hintText="solved" name="solved" />
                    <DatePicker hintText="Date" name="date" />
                    <TextField hintText="severe" name="severe" />
                    <FlatButton label="Default" type="submit" />
                </form>
                {this.state.showMessage ? message : null}
            </div>
        );
    }
    save = (ev) => {
        ev.preventDefault();
        const date = ev.target['date'].value;
        const locationId = ev.target['locationId'].value;
        const description = ev.target['description'].value;
        const solved = ev.target['solved'].value;
        const severe = ev.target['severe'].value;
        // date in juiste formaat YYYY-MM-dd => ddMMYYYY
        const momentDate = moment(date);
        const dateToSend = momentDate.format('DDMMYYYY');
        const id = HttpService.getId();
        HttpService.addProblemEntry(id, locationId, description, solved, dateToSend, severe).then(() => {
            this.props.addEntry({
                "id": id,
                "locationId": locationId,
                "description": description,
                "solved": solved,
                "date": dateToSend,
                "severe": severe
            });
            this.setState({ showMessage: true });
        });
    }
    componentDidMount() {
        this.props.setTitle('Update Problem');
    }
}

const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        ...mapDispatchToPropsTitle(dispatch, ownProps),
        addEntry: (entry) => {
            dispatch({ type: 'ADD_PROBLEMENTRY', payload: entry });
        }
    }
}

export default connect(undefined, mapDispatchToProps)(ProblemsAddPage)
