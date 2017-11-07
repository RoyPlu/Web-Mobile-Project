import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';
import HttpService from '../common/http-service';
import '../index.css';

let hasFetchedEntries = false;

class EndDateProblemForms extends Component {
    constructor(props) {
        super(props);
        this.state = {
            endDateProblemForms: [],
            problemMessageId : props.match.params.problemMessageId
        };
    }
    componentWillMount() {
        if (!hasFetchedEntries) {
            HttpService.getEndDateByProblemMessageId(this.state.problemMessageId).then(fetchedEntries => this.setState({endDateProblemForms : fetchedEntries}));
            hasFetchedEntries = true;
        }
    }
    render(){
        console.log(this.state.endDateProblemForms);

        const renderedEntries = this.state.endDateProblemForms.map((entry) => {
            return (
                <div class="card">
                    <h1>EndDateProblemForm Id: {entry.id}</h1>
                    <hr/>
                    <h3>ProblemMessage Id: {entry.problemmessage_id}</h3>
                    <h3>End Date: {entry.end_date}</h3>
                </div>
            );
        });
        return (
            <div>
                {renderedEntries}
            </div>
        )
    }
    componentDidMount() {
        this.props.setTitle('EndDateProblemForms');
    }    
}

export default connect(undefined, mapDispatchToProps)(EndDateProblemForms);
