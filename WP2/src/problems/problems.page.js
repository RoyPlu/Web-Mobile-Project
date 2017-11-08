import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';
import HttpService from '../common/http-service';
import '../index.css';
import FloatingActionButton from 'material-ui/FloatingActionButton';
import ContentAdd from 'material-ui/svg-icons/content/add';
import { Link } from 'react-router-dom';

let hasFetchedEntries = false;

class ProblemsPage extends Component {
    constructor(props) {
        super(props);
        this.state = {
            problems: [],
            locationId : props.match.params.locationId
        };
    }
    componentWillMount() {
        if (!hasFetchedEntries) {
            HttpService.getProblemMessagesByLocationId(this.state.locationId).then(fetchedEntries => this.setState({problems : fetchedEntries}));
            hasFetchedEntries = true;
        }
    }
    render(){
        console.log(this.state.problems);

        var renderedEntries = this.state.problems.map((entry) => {

                    if (entry.severe === true) {
                        return (
                        <div class="card">
                            <h1 color="red">Problem Id: {entry.id}</h1>
                            <hr/>
                            <h3 color="red">Location Id: {entry.location_id}</h3>
                            <h3 color="red">Description: {entry.problem}</h3>
                            <h3 color="red">Is solved: {String(entry.solved)}</h3>
                            <h3 color="red">Date: {entry.date}</h3>
                            <h3 color="red">Severe: {String(entry.severe)}</h3>
                            <Link to="/addproblem">
                                <FloatingActionButton style={{ position: 'fixed', right: '15px', bottom: '15px' }}>
                                    <ContentAdd />
                                </FloatingActionButton>
                            </Link>
                        </div>
                        );
                    } else {
                        return (
                            <div class="card">
                                <h1>Problem Id: {entry.id}</h1>
                                <hr/>
                                <h3>Location Id: {entry.location_id}</h3>
                                <h3>Description: {entry.problem}</h3>
                                <h3>Is solved: {String(entry.solved)}</h3>
                                <h3>Date: {entry.date}</h3>
                                <h3>Severe: {String(entry.severe)}</h3>
                                <Link to="/addproblem">
                                    <FloatingActionButton style={{ position: 'fixed', right: '15px', bottom: '15px' }}>
                                        <ContentAdd />
                                    </FloatingActionButton>
                                </Link>
                            </div>
                        );
                    }

        });
        return (
            <div>
                {renderedEntries}
            </div>
        )
    }
    componentDidMount() {
        this.props.setTitle('Problems');
    }    
}

export default connect(undefined, mapDispatchToProps)(ProblemsPage);
