<template>
    <section class="top">
        <div class="header container">
            <div class="header__logo">
                <a href="/">
                    <img src="../assets/logo.svg" alt="logo"
                    /></a>
            </div>
            <nav class="header__nav">
                <RouterLink to="/">Главная</RouterLink>
                <RouterLink to="/calc">Рассчитать стоимость</RouterLink>
                <RouterLink to="/about">О Нас</RouterLink>
                <RouterLink to="to/contacts">Контакты</RouterLink>
            </nav>
            <div class="header__call">
                <a href="tel:+79123456789">
                    <img src="../assets/images/call.png" alt="call">
                </a>
            </div>
        </div>
    </section>
</template>

<script>
</script>

<style scoped lang="scss">
.header {
    height: 85px;
    max-width: 1920px;
    display: flex;
    justify-content: space-between;
    background: rgba(240, 240, 240, 0.8);
    backdrop-filter: blur(15px);
    padding: 8px 24px;

    &__logo {
        display: flex;
        flex-direction: column;
        justify-content: center;
     }
    &__nav {
        display: flex;
        a {
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 28px;
            font-weight: 600;
            color: #222222;
            padding: 0 24px;
            text-decoration: none;
            &.router-link-exact-active {
                border-radius: 16px;
                color: #ffffff;
                background: #FF6433;
            }
        }
    }
    &__call {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
}
</style>

