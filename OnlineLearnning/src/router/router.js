import { createRouter, createWebHistory } from 'vue-router' 
import NotFound from '@/views/NotFound.vue'
import Homepage from '@/views/MainPage/Homepage.vue'

const routes = [
  //{
//     path: '/',
//     redirect: '/login'
//   },
//   {
//     path: '/login',
//     name: 'login',
//     component: Login,
//     meta: { guest: true }
//   },
 
  {
    path: '/',
    name: 'Homepage',
     component: Homepage,
  },
  //  {
  //   path: '/login',
  //   name: 'login',
  //   component: Login,
  //   meta: { guest: true }
  // },
  
  {
    path: '/:pathMatch(.*)*',
    name: 'not-found',
    component: NotFound
  }
]

const router = createRouter({
  history: createWebHistory(import.meta.env.VITE_BASE_URL),
  routes
})

export default router
