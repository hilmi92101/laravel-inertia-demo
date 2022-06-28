require('./bootstrap');

import { createApp } from 'vue'; 
import router from './routes'; 
import App from './Index';

const app = createApp(App); 

app.use(router); 
app.mount('#app');