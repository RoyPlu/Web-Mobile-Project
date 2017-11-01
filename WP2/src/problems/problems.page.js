import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';
import HttpService from '../common/http-service';

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
                return (
                    <div>
                        <h3>Problem Id: {entry.id}</h3>
                        <h3>Location Id: {entry.location_id}</h3>
                        <h3>Description: {entry.problem}</h3>
                        <h3>Is solved: {entry.solved}</h3>
                        <h3>Date: {entry.date}</h3>
                        <hr/>
                    </div>
                );
        });
        return (
            <div>
                <hr/>
                {renderedEntries}
            </div>
        )
    }
    componentDidMount() {
        this.props.setTitle('Problems');
    }    
}

export default connect(undefined, mapDispatchToProps)(ProblemsPage);
