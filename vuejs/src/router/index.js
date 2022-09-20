import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Proyek from '../components/page/Proyek.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },

  {
    path: '/spesialisasi_kami',
    name: 'spesialisasi_kami',
    component: () => import('../components/page/SpesialisasiKami.vue')
  },
  {
    path: '/layanan',
    name: 'layanan',
    component: () => import('../components/page/Layanan.vue')
  },
  {
    path: '/proyek',
    name: 'proye',
    component: () => import('../components/page/Proyek.vue')
  },
  {
    path: '/contact',
    name: 'contact',
    component: () => import('../components/page/Footer.vue')
  }






]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
