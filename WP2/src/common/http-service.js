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
        console.log(`${this.baseUrl}/location/${id}/problems`);
        console.log(axios.get(`${this.baseUrl}/location/${id}/problems`).then(r => r.data));
        return axios.get(`${this.baseUrl}/location/${id}/problems`).then(r => r.data);
    }

    getStatusMessagesByLocationId(id) {
        console.log(`${this.baseUrl}/location/${id}/status`);
        console.log(axios.get(`${this.baseUrl}/location/${id}/status`).then(r => r.data));
        return axios.get(`${this.baseUrl}/location/${id}/status`).then(r => r.data);
    }

    getScoresByLocationId(id) {
        console.log(`${this.baseUrl}/location/${id}/scores`);
        console.log(axios.get(`${this.baseUrl}/location/${id}/scores`).then(r => r.data));
        return axios.get(`${this.baseUrl}/location/${id}/scores`).then(r => r.data);
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
