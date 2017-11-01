import React, { Component } from 'react';
import LocationTable from './location-table';
import HttpService from '../common/http-service';
import { connect } from "react-redux";
import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
import FloatingActionButton from 'material-ui/FloatingActionButton';
import ContentAdd from 'material-ui/svg-icons/content/add';
import { Link } from 'react-router-dom';

let hasFetchedLocationEntries = false;

class LocationPage extends Component {
    constructor(props) {
        super(props);
        console.log("locationpage :" + this.props);
    }
    componentWillMount() {
        if (!hasFetchedLocationEntries) {
            HttpService.getLocationbyId().then(fetchedEntries => this.props.setEntries(fetchedEntries));
            hasFetchedLocationEntries = true;
        }
    }
    delete = (id, name) => {
        this.props.deleteEntry(id);
        HttpService.deleteLocationEntry(name);
    }
    render() {
        const fetchedEntries = this.props.locationEntries;
        return (
            <div>
                <h1>Id: {fetchedEntries.id}</h1>
                <h1>Name: {fetchedEntries.name}</h1>
            </div>
        );
    }
    componentDidMount() {
        this.props.setTitle('Locations');
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        locationEntries: state.locationEntries,
    };
};

const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        ...mapDispatchToPropsTitle(dispatch, ownProps),
        setEntries: (entries) => {
            dispatch({ type: 'SET_LOCATIONENTRIES', payload: entries });
        },
        deleteEntry: (date) => {
            dispatch({ type: 'DELETE_LOCATIONENTRY', payload: date })
        }
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(LocationPage);
