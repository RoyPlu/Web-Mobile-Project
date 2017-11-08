import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
import TextField from 'material-ui/TextField';
import DatePicker from 'material-ui/DatePicker';
import FlatButton from 'material-ui/FlatButton';
import HttpService from '../common/http-service';
import { Link } from 'react-router-dom';

class EndDateProblemFormsAddPage extends Component {
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
                    <TextField hintText="problemMessageId" name="problemMessageId" />
                    <DatePicker hintText="end_date" name="end_date" />
                    <FlatButton label="Add End Date Form" type="submit" />
                </form>
                {this.state.showMessage ? message : null}
            </div>
        );
    }
    save = (ev) => {
        ev.preventDefault();
        console.log(ev);
        let problemMessageId = ev.target['problemMessageId'].value;
        let endDate = ev.target['end_date'].value;
        HttpService.addEndDateProblemFormEntry(problemMessageId, endDate);
        this.setState({ showMessage: true });
    };
    componentDidMount() {
        this.props.setTitle('Add End Date Form');
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

export default connect(undefined, mapDispatchToProps)(EndDateProblemFormsAddPage)
