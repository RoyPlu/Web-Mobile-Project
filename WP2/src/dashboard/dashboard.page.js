import React, { Component } from 'react';
import { connect } from "react-redux";
import mapDispatchToProps from '../common/title-dispatch-to-props';

class DashboardPage extends Component {
    render(){
        return (
            <div  class="main">
                <h1 class="elegantshadow">Dashboard</h1>
                <h2 class="elegantshadow"> WP2 - REACT </h2>
            </div>
        )
    }
    componentDidMount() {
        this.props.setTitle('Dashboard');
    }    
}

export default connect(undefined, mapDispatchToProps)(DashboardPage);
