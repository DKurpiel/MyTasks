const iconElement = document.querySelector('.weather.icon');
const tempElement = document.querySelector('.temperature.value p');
const descElement = document.querySelector('.temperature-description');
const locationElement = document.querySelector('.location p');
const notificationElement = document.querySelector('.notification');

//app data
const weather = {};
weather.temperature = { unit: 'celsius' };

const kelvin = 273;
const key = "";

if ('geolocation' in navigator) {
    navigator.geolocation.getCurrentPosition(setPosition, showError);
} else {
    notificationElement.style.display = 'block';
    notificationElement.innerHTML = `<p>dont</p>`;
}

function setPosition(position) {
    let latitude = position.coord.latitude;
    let longitude = position.coord.latitude;

    getWeather (latitude, longitude);
}
    
// show error

function showError(error) {
    notificationElement.style.display = 'block';
    notificationElement.innerHTML = `<p> ${error.message}`;
}

// get weather from api

function getWeather (latitude, longitude) {
    let api = `http://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${key}`;

    fetch(api) .then (function(response){
        let data = response.json();
        return data;
    })
    .then(function(data){
        weather.temperature.value = Math.floor(data.main.temp - kelvin);
        weather.description = data.weather[0].description
        weather.iconId = data.weather[0].icon;
        weather.city = data.name;
        weather.country = data.sys.country;
    })
    .then(function(){
        displayWeather();
    })
}

// display weather

function displayWeather(){
    iconElement.innerHTML = `<img src = "image/${weather.iconId}.png" />`;
    tempElement.innerHTML = `${weather.temperature.value}° <span>C</span>`;
    descElement.innerHTML = weather.description;
    locationElement.innerHTML = `${weather.city}, ${weather.country}`;
}