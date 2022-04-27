<template>
<div class="call-me">
    <a href="tel:+79123456789">ЗАПИСАТЬСЯ</a>
</div>
</template>

<script>
export default {
    name: "CallMe"
}
</script>

<style scoped lang="scss">
.call-me {
    height: 64px;
    width: 292px;
    margin-left: 236px;
    font-size: 28px;
    font-weight: 400;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    border-radius: 16px;
    background: #FF6433;
    a {
        text-decoration: none;
        color: #000000;
    }
}
</style>
