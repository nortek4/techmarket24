import axios from 'axios';

const http = axios.create({
    baseURL: '/api',
    headers: {
        Accept: 'application/json',
    },
});

export function setAuthToken (token){
    if(token){
        http.defaults.headers.Authorization = `Bearer ${token}`
    } else{
        delete http.defaults.headers.Authorization
    }
}

export default http