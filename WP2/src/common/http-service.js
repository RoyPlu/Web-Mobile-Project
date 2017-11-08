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

    addLocationEntry(id, name) {
        return axios.post(`${this.baseUrl}/locations`, { name:name });
    }
    deleteLocationEntry(id) {
        return axios.delete(`${this.baseUrl}/locations/${id}`)
    }
}

const httpService = new HttpService(1);

export default httpService;
