import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';

class StatusPage extends Component {
    render() {
        return (
            <h2>Status</h2>
        )
    }
    componentDidMount() {
        this.props.setTitle('Status');
    }
}

export default connect(undefined, mapDispatchToProps)(StatusPage);
