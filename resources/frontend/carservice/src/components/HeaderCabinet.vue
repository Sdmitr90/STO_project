<template>
  <section class="top">
    <div class="header">
      <nav class="header__nav">
        <RouterLink to="#">Пункт 1</RouterLink>
        <RouterLink to="#">Пункт 2</RouterLink>
        <RouterLink to="#">Пункт 3</RouterLink>
      </nav>
      <div class="header__out">
        <span @click="this.$emit('logout')">Выйти</span>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  emits: ["logout"],
};
</script>

<style scoped lang="scss">
.header {
  height: 35px;
  max-width: 1920px;
  display: flex;
  justify-content: space-between;
  background: rgba(189, 189, 189, 0.99);
  padding: 8px 20px;
  & a {
    text-decoration: none;
    color: #ffffff;
  }
  &__nav {
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
    font-size: 18px;
    font-weight: 600;
    color: #ffffff;
    text-decoration: none !important;
    &.router-link-exact-active {
      border-radius: 16px;
      color: #ffffff;
      background: #ff6433;
    }
  }
  &__out {
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: #ff6433;
    padding: 0 20px;
    border-radius: 20px;
    font-size: 20px;
    & span {
      color: #ffffff;
      &:hover {
        cursor: pointer;
      }
    }
  }
}
</style>
