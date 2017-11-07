import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';
import HttpService from '../common/http-service';
import '../index.css';

let hasFetchedEntries = false;

class StatusPage extends Component {
    constructor(props) {
        super(props);
        this.state = {
            status: [],
            locationId : props.match.params.locationId
        };
    }
    componentWillMount() {
        if (!hasFetchedEntries) {
            HttpService.getStatusMessagesByLocationId(this.state.locationId).then(fetchedEntries => this.setState({status : fetchedEntries}));
            hasFetchedEntries = true;
        }
    }
    render(){
        console.log(this.state.status);

        var renderedEntries = this.state.status.map((entry) => {
            return (
                <div class="card">
                    <h1>Status Id: {entry.id}</h1>
                    <hr/>
                    <h3>Location Id: {entry.location_id}</h3>
                    <h3>Description: {entry.status}</h3>
                    <h3>Date: {entry.date}</h3>
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
        this.props.setTitle('Status');
    }
}

export default connect(undefined, mapDispatchToProps)(StatusPage);
