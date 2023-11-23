/* jshint esversion: 6 */

import {createRouter, createWebHistory} from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Login from "../views/Login.vue";
import Registration from "../views/Registration.vue";
import RequestPassword from "../views/RequestPassword.vue";
import ResetPassword from "../views/ResetPassword.vue";
// import GuestLayout from "../components/GuestLayout.vue";


const routes = [
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard
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
    }
    
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;  