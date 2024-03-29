import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue'),
  },
  {
  path: '/contact',
  name: 'Contact',
  component: () => import(/* webpackChunkName: "about" */ '../views/Contact.vue')
  },
]

const router = new VueRouter({
  mode : '',
  routes
})

export default router
