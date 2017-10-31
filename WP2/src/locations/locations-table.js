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
        <TableRowColumn>{props.entry.name}</TableRowColumn>
        <TableRowColumn><Link to="/problemmessages">Problem</Link></TableRowColumn>
        <TableRowColumn><Link to="/statusmessages">Status</Link></TableRowColumn>

    </TableRow>
)

const Rows = (props) => props.entries.map(e => (
    <Row entry={e} delete={props.delete} />
));

const LocationsTable = (props) => (
    <Table>
        <TableHeader>
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
