import './bootstrap';




import { createApp } from 'vue/dist/vue.esm-bundler.js';
import { store } from './store/store.js';



import CompanySettings from './components/admin_panel_settings/index.vue';
import CompanySettingsEdit from './components/admin_panel_settings/edit.vue';

import Form from 'vform'
window.Form = Form;

import Swal from 'sweetalert2';
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});

window.Toast = Toast;


const app = createApp({})



app.component('company-settings', CompanySettings);
app.component('company-settings-edit', CompanySettingsEdit);




app.use(store);

app.mount('#app');


