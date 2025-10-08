import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Home',
      component: () => import('../views/HomeView.vue')
    },
    {
      path: '/header',
      name: 'Header',
      component: () => import('../views/HeaderView.vue')
    },
    {
      path: '/products',
      name: 'Products',
      component: () => import('../views/ProductView.vue')
    },
  ],
})

export default router
