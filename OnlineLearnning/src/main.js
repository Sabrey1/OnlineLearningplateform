import { createApp } from 'vue'
import './style.css'
import   App from './App.vue'
import PrimeVue from 'primevue/config';
import Aura from '@primeuix/themes/aura';
import router from '@/router/router.js'
import 'primeicons/primeicons.css'
import Button from "primevue/button"
import "/node_modules/primeflex/primeflex.css"
import i18n from './i18n'
const app =createApp(App)
app.use(router)
app.use(PrimeVue, {
    theme: {
        preset: Aura
    }
});

app.use(i18n)
window.t = (key) => i18n.global.t(key)

app.component('Button', Button);
app.mount('#app')
