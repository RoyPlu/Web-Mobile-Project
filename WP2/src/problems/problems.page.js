/*import React, { Component } from 'react';
import ProblemsTable from './problems-table';
import HttpService from '../common/http-service';
import { connect } from "react-redux";
import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
import FloatingActionButton from 'material-ui/FloatingActionButton';
import ContentAdd from 'material-ui/svg-icons/content/add';
import { Link } from 'react-router-dom';

let hasFetchedLocationEntries = false;

class LocationsPage extends Component {
    componentWillMount() {
        if (!hasFetchedProblemEntries) {
            HttpService.getProblemMessages().then(fetchedEntries => this.props.setEntries(fetchedEntries));
            hasFetchedProblemEntries = true;
        }
    }
    delete = (id, name) => {
        this.props.deleteEntry(id);
        HttpService.deleteLocationEntry(name);
    }
    render() {
        const fetchedEntries = this.props.problemEntries;
        return (
            <div>
                <LocationsTable entries={fetchedEntries} delete={this.delete} />
                <Link to="/locations/add">
                    <FloatingActionButton style={{ position: 'fixed', right: '15px', bottom: '15px' }}>
                        <ContentAdd />
                    </FloatingActionButton>
                </Link>
            </div>
        );
    }
    componentDidMount() {
        this.props.setTitle('Problem Messages');
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        problemEntries: state.problemEntries,
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

export default connect(mapStateToProps, mapDispatchToProps)(ProblemsPage);*/




import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';

class ProblemsPage extends Component {
    render(){
        return (
            <h2>Problems</h2>
        )
    }
    componentDidMount() {
        this.props.setTitle('Problems');
    }    
}

export default connect(undefined, mapDispatchToProps)(ProblemsPage);
