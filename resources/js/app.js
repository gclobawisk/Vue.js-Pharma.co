import { createApp } from 'vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Dashboard from './components/Dashboard.vue';
import Modal from './components/Modal.vue';
import Footer from './components/Footer.vue';
import Navbar from './components/Navbar.vue';

const app = createApp({});

//register the component
app.component('Login', Login);
app.component('Register', Register);
app.component('Dashboard', Dashboard);
app.component('Modal', Modal);
app.component('Footer', Footer);
app.component('Navbar', Navbar);

//..HTML element to mount the Vue application
app.mount('#app');

require('./bootstrap');