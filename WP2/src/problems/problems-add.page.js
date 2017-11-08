import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
import TextField from 'material-ui/TextField';
import DatePicker from 'material-ui/DatePicker';
import FlatButton from 'material-ui/FlatButton';
import HttpService from '../common/http-service';
import { Link } from 'react-router-dom';

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
            <div class="formDesign">
                <form onSubmit={this.save}>
                    <TextField hintText="locationId" name="locationId" />
                    <TextField hintText="problem" name="problem" />
                    <TextField hintText="solved" name="solved" />
                    <DatePicker hintText="date" name="date" />
                    <TextField hintText="severe" name="severe" />
                    <FlatButton label="Add ProblemMessage" type="submit" />
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
        let problem = ev.target['problem'].value;
        let solved = ev.target['solved'].value;
        let severe = ev.target['severe'].value;
        HttpService.addProblemMessageEntry(locationId, problem, solved, date, severe);
        this.setState({ showMessage: true });
    };
    componentDidMount() {
        this.props.setTitle('Add Problem');
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

export default connect(undefined, mapDispatchToProps)(ProblemsAddPage)
