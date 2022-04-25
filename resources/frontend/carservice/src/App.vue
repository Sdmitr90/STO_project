<template>
    <div class="global-wrapper">
        <section class="footer-press-down">
            <Header />
            <RouterView />
            <Footer />
        </section>
    </div>
</template>

<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"

</script>

<style scoped lang="scss">
.global-wrapper {
    background: linear-gradient(to top left, rgba(255, 100, 51, 0.3), rgba(33, 22, 22, 0)), url("assets/images/pexels-mike-190574.jpg");
    height: 100vh;
    max-width: 1920px;
    margin: 0 auto;
    background-repeat: no-repeat;
    background-size: cover;
}
.footer-press-down {
    display: grid;
    grid-template-rows: min-content 1fr;
    min-height: 100vh;
}
.container {
    box-sizing: border-box;
}
</style>
