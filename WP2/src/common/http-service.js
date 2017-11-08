import axios from 'axios';

class HttpService {
    userId = null;
    baseUrl = 'http://localhost/Web-Mobile-Project/api.php';
    parts = null;
    location = null;

    constructor(userId) {
        this.userId = userId;
    }

    getId() {
        return Math.random() * 10000000;
    }

    getLocations() {
        console.log(axios.get(`${this.baseUrl}/locations`).then(r => r.data));
        return axios.get(`${this.baseUrl}/locations`).then(r => r.data);

    }

    getLocationbyId(){
        this.parts =  window.location.pathname.split('/');
       this.location = this.parts.pop();
       console.log(this.location);
        console.log(axios.get(`${this.baseUrl}/locations/${this.location}`).then(r => r.data));
        return axios.get(`${this.baseUrl}/locations/${this.location}`).then(r => r.data);
    }

    getProblemMessagesByLocationId(id) {
        console.log(`${this.baseUrl}/locations/${id}/problems`);
        console.log(axios.get(`${this.baseUrl}/locations/${id}/problems`).then(r => r.data));
        return axios.get(`${this.baseUrl}/locations/${id}/problems`).then(r => r.data);
    }

    getStatusMessagesByLocationId(id) {
        console.log(`${this.baseUrl}/locations/${id}/status`);
        console.log(axios.get(`${this.baseUrl}/locations/${id}/status`).then(r => r.data));
        return axios.get(`${this.baseUrl}/locations/${id}/status`).then(r => r.data);
    }

    getScoresByLocationId(id) {
        console.log(`${this.baseUrl}/locations/${id}/scores`);
        console.log(axios.get(`${this.baseUrl}/locations/${id}/scores`).then(r => r.data));
        return axios.get(`${this.baseUrl}/locations/${id}/scores`).then(r => r.data);
    }

    getEndDateByProblemMessageId(id) {
        console.log(`${this.baseUrl}/problemmessages/${id}/enddate`);
        console.log(axios.get(`${this.baseUrl}/problemmessages/${id}/enddate`).then(r => r.data));
        return axios.get(`${this.baseUrl}/problemmessages/${id}/enddate`).then(r => r.data);
    }

    addLocationEntry(name) {
        console.log(JSON.stringify({ name:name }));
        axios.post(`${this.baseUrl}/locations/`, JSON.stringify([{name : name}]))
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    addProblemMessageEntry(locationId, problem, solved, date, severe) {
        console.log(JSON.stringify({ location_id:locationId, problem: problem, solved:solved, date:date, severe:severe }));
        axios.post(`${this.baseUrl}/problemmessages/`, JSON.stringify([{location_id:locationId, problem:problem, solved:solved, date:date, severe:severe}]))
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    addScoreEntry(locationId, score, date) {
        console.log(JSON.stringify({location_id:locationId, score:score, date:date}));
        axios.post(`${this.baseUrl}/scores/`, JSON.stringify([{location_id:locationId, score:score, date:date}]))
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    addStatusMessageEntry(locationId, status, date) {
        console.log(JSON.stringify({location_id:locationId, status:status, date:date}));
        axios.post(`${this.baseUrl}/statusmessages/`, JSON.stringify([{location_id:locationId, status:status, date:date}]))
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    addEndDateProblemFormEntry(problemMessageId, endDate) {
        console.log(JSON.stringify({problemmessage_id:problemMessageId, end_date:endDate}));
        axios.post(`${this.baseUrl}/enddateproblems/`, JSON.stringify([{problemmessage_id:problemMessageId, end_date:endDate}]))
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    deleteLocationEntry(id) {
        return axios.delete(`${this.baseUrl}/locations/${id}`)
    }
}

const httpService = new HttpService(1);

export default httpService;
