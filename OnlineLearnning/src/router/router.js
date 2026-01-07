import { createRouter, createWebHistory } from 'vue-router' 
import NotFound from '@/views/NotFound.vue'
import Homepage from '@/views/MainPage/Homepage.vue'
import Login from '@/views/Auth/Login.vue'
import Register from '@/views/Auth/Register.vue'
import CategoryList from '@/views/Category/CategoryList.vue'
import CourseList from '@/views/Course/CourseList.vue'
import ComCourseDetail from '@/views/Course/components/ComCourseDetail.vue'
import Contact from '@/views/ContactUS/contact.vue'


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
  {
    path: '/login',
    name: 'Login',
     component: Login,
  },
  {
    path: '/register',
    name: 'Register',
     component: Register,
  },
  {
    path: '/category',
    name: 'CategoryList',
     component: CategoryList,
  },
  {
    path: '/contact',
    name: 'Contact',
     component: Contact,
  },
  {
    path: '/course',
    name: 'CourseList',
     component: CourseList,
  },
  {
    path: '/course-detail/:id',
    name: 'ComCourseDetail',
     component: ComCourseDetail,
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
