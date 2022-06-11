import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/",
            name: "home",
            component: HomeView,
        },
        {
            path: "/calc",
            name: "calc",
            component: () => import("../views/СalcView.vue"),
        },
        {
            path: "/about",
            name: "about",
            component: () => import("../views/AboutViewNew.vue"),
        },
        {
            path: "/contacts",
            name: "contacts",
            component: () => import("../views/СontactsView.vue"),
        },
    ],
});

export default router;
