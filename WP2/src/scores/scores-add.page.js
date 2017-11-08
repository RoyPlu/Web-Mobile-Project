import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
import TextField from 'material-ui/TextField';
import FlatButton from 'material-ui/FlatButton';
import HttpService from '../common/http-service';
import { Link } from 'react-router-dom';
import moment from 'moment';
import DatePicker from 'material-ui/DatePicker';

class ScoresAddPage extends Component {
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
                    <TextField hintText="score" name="score" />
                    <DatePicker hintText="date" name="date" />
                    <FlatButton label="Add Score" type="submit" />
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
        let score = ev.target['score'].value;
        // date in juiste formaat YYYY-MM-dd => ddMMYYYY
        HttpService.addScoreEntry(locationId, score, date);
        this.setState({ showMessage: true });
    };
    componentDidMount() {
        this.props.setTitle('Add Score');
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

export default connect(undefined, mapDispatchToProps)(ScoresAddPage)
