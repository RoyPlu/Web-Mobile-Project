import axios from 'axios';

class HttpService {
    userId = null;
    baseUrl = 'http://localhost/WP1/api.php';
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

    getProblemMessages() {
        console.log(axios.get(`${this.baseUrl}/problemmessages`).then(r => r.data));
        return axios.get(`${this.baseUrl}/problemmessages`).then(r => r.data);

    }

    addLocationEntry(id, name) {
        return axios.post(`${this.baseUrl}/calorieEntries`, { id: id, userId: this.userId, name:name });
    }
    deleteLocationEntry(id) {
        return axios.delete(`${this.baseUrl}/calorieEntries/${id}`)
    }
}

const httpService = new HttpService(1);

export default httpService;
