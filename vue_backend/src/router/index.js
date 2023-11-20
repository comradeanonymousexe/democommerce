/* jshint esversion: 6 */

import {createRouter, createWebHistory} from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Login from "../views/Login.vue";
import Registration from "../views/Registration.vue";
import Abcd from "../views/Abcd.vue";

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
        component: Registration
    },
    {
        path: "/abcd",
        name: "abcd",
        component: Abcd
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;  