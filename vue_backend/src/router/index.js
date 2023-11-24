/* jshint esversion: 6 */

import {createRouter, createWebHistory} from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Login from "../views/Login.vue";
import Registration from "../views/Registration.vue";
import RequestPassword from "../views/RequestPassword.vue";
import ResetPassword from "../views/ResetPassword.vue";
import AppLayout from "../components/AppLayout.vue";
import Products from "../views/Products/Products.vue";
import NotFound from "../views/NotFound.vue";

// import GuestLayout from "../components/GuestLayout.vue";


const routes = [
    {
        path: '/',
        redirect: '/app'
    },
    {
        path: '/app',
        name: 'app',
        redirect: '/app/dashboard',
        component: AppLayout,
        meta: {
            requiresAuth: true
        },
        children: [
            {
                path: 'dashboard',
                name: 'app.dashboard',
                component: Dashboard
            },
            {
                path: 'products',
                name: 'app.products',
                component: Products
            }
        ]
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    
    {
        path: '/registration',
        name: 'registration',
        component: Registration,
        
    },
    
    {
        path: '/request-password',
        name: 'requestPassword',
        component: RequestPassword,
        meta: {
          requiresGuest: true
        }
    },
    
    {
        path: '/reset-password/:token',
        name: 'resetPassword',
        component: ResetPassword,
        meta: {
          requiresGuest: true
        }
    },
    {
        path: '/:pathMatch(.*)',
        name: 'notfound',
        component: NotFound,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;  