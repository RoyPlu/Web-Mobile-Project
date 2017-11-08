import React, { Component } from 'react';
import LocationsTable from './locations-table';
import HttpService from '../common/http-service';
import { connect } from "react-redux";
import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
import FloatingActionButton from 'material-ui/FloatingActionButton';
import ContentAdd from 'material-ui/svg-icons/content/add';
import { Link } from 'react-router-dom';

let hasFetchedLocationEntries = false;

class LocationsPage extends Component {
    componentWillMount() {
        if (!hasFetchedLocationEntries) {
            HttpService.getLocations().then(fetchedEntries => this.props.setEntries(fetchedEntries));
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
                <LocationsTable entries={fetchedEntries} delete={this.delete} />
                <Link to="/addlocation">
                    <FloatingActionButton style={{ position: 'fixed', right: '15px', bottom: '15px' }}>
                        <ContentAdd />
                    </FloatingActionButton>
                </Link>
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

export default connect(mapStateToProps, mapDispatchToProps)(LocationsPage);
