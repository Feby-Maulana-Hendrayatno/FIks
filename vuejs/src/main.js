import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
// import store from './store'


import AOS from 'aos'
import 'aos/dist/aos.css'

import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.css'


createApp(App).use(router).mount('#app')