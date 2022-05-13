<template>
    <section class="mid">
        <div class="main container">
            <Contacts />
        </div>
    </section>
</template>

<script>
import Contacts from "../components/contacts.vue";
export default {
    components: {Contacts}
}

</script>

<style scoped lang="scss">
.mid{
    background: rgba(0, 0, 0, 0.67);
}
</style>
