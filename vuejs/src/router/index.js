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
    path: '/footer',
    name: 'footer',
    component: () => import('../components/page/Footer.vue')
  },
  {
    path: '/carousel',
    name: 'carousel',
    component: () => import('../components/page/Carousel.vue')
  },
  {
    path: '/navbar',
    name: 'navbar',
    component: () => import('../components/page/Navbar.vue')
  },
  {
    path: '/tentang_kami',
    name: 'tentang kami',
    component: () => import('../components/page/TentangKami.vue')
  },






]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
