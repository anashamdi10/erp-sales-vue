import './bootstrap';




import { createApp } from 'vue/dist/vue.esm-bundler.js';
import { store } from './store/store.js';


import AppComponent from './components/app.vue';
import CompanySettings from './components/admin_panel_settings/index.vue';







const app = createApp({})


app.component('app-component', AppComponent);
app.component('company-settings', CompanySettings);


app.use(store);
app.mount('#app');


