<template>
    <section class="mid">
        <div class="main container">
            <div class="main__heading">
                <h1>СЕРВИС СТО</h1>
            </div>
                <CallMe />
        </div>
    </section>
</template>

<script setup>
import CallMe from "../components/CallMe.vue"
</script>

<style scoped lang="scss">
.main {
    &__heading {
        width: 624px;
        height: 150px;
        margin-left: 97px;
        margin-top: 327px;
        margin-bottom: 36px;
        border-radius: 16px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: rgba(0, 0, 0, 0.67);
        h1 {
            font-size: 95px;
            font-weight: 700;
            color: #ffffff;
        }
    }
}
</style>
