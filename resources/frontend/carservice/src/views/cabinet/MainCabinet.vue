<template>
    <section class="mid">
        <div class="main container">
            <HeaderCabinet />
            <RouterView />
            <div class="main__heading">
                <h1>Личный кабинет</h1>
            </div>
        </div>
    </section>
</template>
<script>
import HeaderCabinet from "@/components/HeaderCabinet.vue";

export default {
    components: { HeaderCabinet },
};
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
