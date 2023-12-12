import weatherapi from './apikey.js';

export default class WeatherClass {
    constructor() {
        // this.modalResult = document.querySelector('#modalResult');
        // this.cancelBtn = this.modalResult.querySelectorAll('.cancel');

        // this.overlay = document.querySelector('#overlay');

        this.place = document.querySelector('#place');
        // this.degree = document.querySelector('#degree');
        this.getWeather = document.querySelector('#getWeather');
        this.result = document.querySelector('#result');
        this.city = '';
        this.temperature = 0;
        this.humidity = 0;
        this.windSpeed = 0;
        this.weatherIcon = '';
        this.condition = '';
        this.API_KEY = weatherapi;
        this.isEnglish = window.location.pathname.includes('/en');
        this.init();
    }

    init() {
        this.city = sessionStorage.getItem('city');
        if (this.city == '' || this.city == null) {
            this.city = 'montreal';
        }
        this.place.value = this.city;
        this.getWeatherFunction(this.city);

        this.place.addEventListener('change', () => {
            if (this.place.value != '') {
                this.getWeather.disabled = false;
            } else {
                this.getWeather.disabled = true;
            }
        })

        this.getWeather.addEventListener('click', async () => {
            this.city = this.place.value;
            sessionStorage.setItem('city', this.city);
            await this.getWeatherFunction(this.city);
        })
    }

    async getWeatherFunction(city) {
        try {
            const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city},CA&appid=${this.API_KEY[Math.floor(Math.random() * this.API_KEY.length)]}&units=metric`);
            const json = await response.json();

            const timezoneOffset = json.timezone / 3600;

            const currentTime = new Date();
            currentTime.setHours(currentTime.getUTCHours() + timezoneOffset);
            const currentHours = currentTime.getHours();
            const currentMinutes = currentTime.getMinutes();

            const sunriseTime = new Date(json.sys.sunrise * 1000);
            sunriseTime.setHours(sunriseTime.getUTCHours() + timezoneOffset);
            const sunriseHour = sunriseTime.getHours();
            const sunriseMinute = sunriseTime.getMinutes();

            const sunsetTime = new Date(json.sys.sunset * 1000);
            sunsetTime.setHours(sunsetTime.getUTCHours() + timezoneOffset);
            const sunsetHour = sunsetTime.getHours();
            const sunsetMinute = sunsetTime.getMinutes();

            this.temperature = Math.round(parseFloat(json.main.temp))
            this.humidity = json.main.humidity;
            this.windSpeed = json.wind.speed;

            if (Date.now() > json.sys.sunrise * 1000 && Date.now() < json.sys.sunset * 1000) {
                this.condition = json.weather[0].main;
                this.condition == 'Clouds' ? this.condition = 'Cloudy' : this.condition;
            } else {
                this.condition = json.weather[0].main + ' night';
                this.condition == 'Clouds night' ? this.condition = 'Cloudy night' : this.condition;
            }
            let conditionWord = this.condition.split(' ')[0];
            if (this.isEnglish == false) {
                switch (conditionWord) {
                    case 'Clear':
                        conditionWord = 'Dégagé';
                        break;
                    case 'Cloudy':
                        conditionWord = 'Nuageux';
                        break;
                    case 'Drizzle':
                        conditionWord = 'Bruineux';
                        break;
                    case 'Haze':
                        conditionWord = 'Brumeux';
                        break;
                    case 'Mist':
                        conditionWord = 'Brumeux';
                        break;
                    case 'Smoke':
                        conditionWord = 'Fumeux';
                        break;
                    case 'Snow':
                        conditionWord = 'Neigeux';
                        break;
                    case 'Rain':
                        conditionWord = 'Pluvieux';
                        break;
                    default:
                        conditionWord = 'Unknown';
                        break;
                }
            }

            this.result.innerHTML = `
            <div class="flex flex-col items-center justify-center gap-2">
                <div class="flex flex-col items-center justify-center">
                    <img src="../../img/weather_icons/${this.condition}.png" alt="weather icon" class="w-10 md:w-14 h-10 md:h-14">
                    <p class="text-xl font-bold">${this.city.charAt(0).toUpperCase() + this.city.slice(1)}</p>
                    <div class="flex flex-row items-center justify-between gap-6">
                        <p class="text-xl" id="degree">${this.temperature}°C</p>
                        <p class="text-xl">${conditionWord}</p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center gap-2 border-t-2 border-gray-400 dark:border-gray-300">
                    <div class="flex flex-row items-center justify-center gap-6 md:gap-10 border-b-2 border-gray-400 dark:border-gray-300">
                        <div class="flex flex-row items-center justify-center">
                            <img src="../../img/weather_icons/sunrise.png" alt="sunrise time" class="w-3 md:w-7 h-3 md:h-7">
                            <p class="text-sm font-bold">${String(sunriseHour).padStart(2, '0')}:${String(sunriseMinute).padStart(2, '0')}</p>
                        </div>
                        <div class="flex flex-row items-center justify-center gap-1">
                            <img src="../../img/weather_icons/clock.png" alt="actual time in ${this.city}" class="w-3 md:w-5 h-3 md:h-5">
                            <p class="text-sm font-bold">${String(currentHours).padStart(2, '0')}:${String(currentMinutes).padStart(2, '0')}</p>
                        </div>
                        <div class="flex flex-row items-center justify-center">
                            <img src="../../img/weather_icons/sunset.png" alt="sunset time" class="w-3 md:w-7 h-3 md:h-7">
                            <p class="text-sm font-bold">${String(sunsetHour).padStart(2, '0')}:${String(sunsetMinute).padStart(2, '0')}</p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-center gap-3 md:gap-5">
                        <div class="flex flex-col items-center justify-center text-sm">
                            <p class="font-bold">${this.isEnglish ? 'Humidity' : 'Humidité'}</p>
                            <div class="flex flex-row items-center justify-center gap-1">
                                <img src="../../img/weather_icons/humidity.png" alt="humidity icon" class="w-3 md:w-4 h-3 md:h-4">
                                <p>${this.humidity}%</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-center text-sm">
                            <p class="font-bold">${this.isEnglish ? 'Wind' : 'Vent'}</p>
                            <div class="flex flex-row items-center justify-center">
                                <img src="../../img/weather_icons/winnd.png" alt="wind speed icon" class="w-3 md:w-5 h-3 md:h-5">
                                <p>${this.windSpeed} km/h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;
        } catch (error) {
            this.result.innerHTML = `
            <div class="flex flex-col items-center justify-center">
            <p class="font-bold text-red-600">${this.isEnglish ? 'Please try again later' : 'Veuillez réessayer plus tard'}</p>
            </div>`
        }
    }
}