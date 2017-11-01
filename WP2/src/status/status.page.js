/*import React, { Component } from 'react';
 import ProblemsTable from './problems-table';
 import HttpService from '../common/http-service';
 import { connect } from "react-redux";
 import mapDispatchToPropsTitle from '../common/title-dispatch-to-props';
 import FloatingActionButton from 'material-ui/FloatingActionButton';
 import ContentAdd from 'material-ui/svg-icons/content/add';
 import { Link } from 'react-router-dom';

 let hasFetchedProblemEntries = false;

 class ProblemsPage extends Component {
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
import HttpService from '../common/http-service';

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
                <div>
                    <h3>Status Id: {entry.id}</h3>
                    <h3>Location Id: {entry.location_id}</h3>
                    <h3>Description: {entry.status}</h3>
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
        this.props.setTitle('Status');
    }
}

export default connect(undefined, mapDispatchToProps)(StatusPage);
