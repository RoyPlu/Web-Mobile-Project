import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';
import HttpService from '../common/http-service';
import '../index.css';
import { Link } from 'react-router-dom';
import FloatingActionButton from 'material-ui/FloatingActionButton';
import ContentAdd from 'material-ui/svg-icons/content/add';

let hasFetchedEntries = false;

class ScoresPage extends Component {
    constructor(props) {
        super(props);
        this.state = {
            scores: [],
            locationId : props.match.params.locationId

        };

        window.total_score = 0;
        window.i = 0;

    }
    componentWillMount() {
        if (!hasFetchedEntries) {
            HttpService.getScoresByLocationId(this.state.locationId).then(fetchedEntries => this.setState({scores : fetchedEntries}));
            hasFetchedEntries = true;
        }
    }
    render(){

        var renderedEntries = this.state.scores.map((entry) => {
                return (
                    <div class="card">

                        <h1>Score Id: {entry.id}</h1>
                        <hr/>
                        <h3>Location Id: {entry.location_id}</h3>
                        <h3>Score: {entry.score}</h3>
                        <h3>Date: {entry.date}</h3>
                        <h4>Average Score: {entry.total_Score}/10 </h4>
                    </div>


                );
        });
        return (
            <div>
                {renderedEntries}
                <Link to="/addscore">
                    <FloatingActionButton style={{ position: 'fixed', right: '15px', bottom: '15px' }}>
                        <ContentAdd />
                    </FloatingActionButton>
                </Link>
            </div>
        )
    }
    componentDidMount() {
        this.props.setTitle('Scores');
    }    
}

export default connect(undefined, mapDispatchToProps)(ScoresPage);
