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
    </TableRow>

)

const Rows = (props) => props.entries.map(e => (
    <Row entry={e} delete={props.delete} />
));

const LocationTable = (props) => (
    <Table>
        <TableHeader>
            <TableRow>
                <TableHeaderColumn>Id</TableHeaderColumn>
                <TableHeaderColumn>Name</TableHeaderColumn>
            </TableRow>
        </TableHeader>
        <TableBody>
            <Row entries={props.entries} delete={props.delete} />
        </TableBody>
    </Table>
)


export default LocationTable;
