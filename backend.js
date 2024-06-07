import fetch from 'node-fetch';

const response = await fetch('https://api.unsplash.com/');
const body = await response.text();

console.log(body);