import React from 'react';
import {
    Table,
    TableBody,
    TableHeader,
    TableHeaderColumn,
    TableRow,
    TableRowColumn,
} from 'material-ui/Table';

import { Link } from 'react-router-dom';

const Row = (props) => (

    <TableRow key={props.entry.id}>

        <TableRowColumn>{props.entry.id}</TableRowColumn>

        <TableRowColumn><Link to={`/locations/${props.entry.id}`}>{props.entry.name}</Link></TableRowColumn>
        <TableRowColumn><Link to={`/locations/${props.entry.id}/problems`}>Problems</Link></TableRowColumn>
        <TableRowColumn><Link to={`/locations/${props.entry.id}/status`}>Status</Link></TableRowColumn>

    </TableRow>

);

const Rows = (props) => props.entries.map(e => (
    <Row entry={e} delete={props.delete} />
));

const LocationsTable = (props) => (
    <Table>
        <TableHeader displaySelectAll={false} adjustForCheckbox={false}>
            <TableRow>
                <TableHeaderColumn>Id</TableHeaderColumn>
                <TableHeaderColumn>Name</TableHeaderColumn>
                <TableHeaderColumn>Problem</TableHeaderColumn>
                <TableHeaderColumn>Status</TableHeaderColumn>
            </TableRow>
        </TableHeader>
        <TableBody>
            <Rows entries={props.entries} delete={props.delete} />
        </TableBody>
    </Table>
)


export default LocationsTable;
