import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';
import HttpService from '../common/http-service';
import '../index.css';

let hasFetchedEntries = false;

class ScoresPage extends Component {
    constructor(props) {
        super(props);
        this.state = {
            scores: [],
            locationId : props.match.params.locationId

        };
    }
    componentWillMount() {
        if (!hasFetchedEntries) {
            HttpService.getScoresByLocationId(this.state.locationId).then(fetchedEntries => this.setState({scores : fetchedEntries}));
            hasFetchedEntries = true;
        }
    }
    render(){
        console.log(this.state.scores);
        var total_score = 0;

        var renderedEntries = this.state.scores.map((entry) => {
                return (
                    <div class="card">

                        <h1>Score Id: {entry.id}</h1>
                        <hr/>
                        <h3>Location Id: {entry.location_id}</h3>
                        <h3>Score: {entry.score}</h3>
                        <h3>Date: {entry.date}</h3>
                        <h4>Total Score: {total_score += parseInt(entry.score)/this.state.scores.length}</h4>
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
        this.props.setTitle('Scores');
    }    
}

export default connect(undefined, mapDispatchToProps)(ScoresPage);
