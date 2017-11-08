import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';
import HttpService from '../common/http-service';
import '../index.css';
import FloatingActionButton from 'material-ui/FloatingActionButton';
import ContentAdd from 'material-ui/svg-icons/content/add';
import { Link } from 'react-router-dom';

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
        const renderedEntries =
                <div class="card">
                    <h1>EndDateProblemForm Id: {this.state.endDateProblemForms.id}</h1>
                    <hr/>
                    <h3>ProblemMessage Id: {this.state.endDateProblemForms.problemmessage_id}</h3>
                    <h3>End Date: {this.state.endDateProblemForms.end_date}</h3>
                </div>;
        return (
            <div>
                {renderedEntries}
                <Link to="/addenddateproblemform">
                    <FloatingActionButton style={{ position: 'fixed', right: '15px', bottom: '15px' }}>
                        <ContentAdd />
                    </FloatingActionButton>
                </Link>
            </div>
        )
    }
    componentDidMount() {
        this.props.setTitle('EndDateProblemForms');
    }
}

export default connect(undefined, mapDispatchToProps)(EndDateProblemForms);
