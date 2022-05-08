<template>
    <section>
        <div class="wrapper">
            <h2>
                Выберите услугу
            </h2>
            <form>
                <div class="wrapper__work" v-for="valueType in typeOfWork" :key="valueType.typeOfWork">
                    <div class="wrapper__work__type" v-on:click="valueType.show = !valueType.show">
                        <h3>
                            {{ valueType.title }}
                        </h3>
                    </div>
                    <div class="wrapper__work__name" v-show="valueType.show" v-for="valueName in nameOfTheWork" :key="valueName.nameOfTheWork">
                        <p class="wrapper__work__name__item" v-if="valueType.id === valueName.types">
                            <input class="wrapper__work__name__item__box" type="checkbox">
                            {{valueName.title}}
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
import axios from 'axios'
export default {
    name: "Calculator",
    data() {
        return {
            typeOfWork: [],
            nameOfTheWork: [],
            errors: [],
        }
    },
    created() {
        axios
            .get('http://localhost:3000/src/api_in/response_1651338166383.json')
            .then(responce => {
                this.typeOfWork = responce.data
            })
            .catch(error => {
                this.errors.push(error)
            })
        axios
            .get('http://localhost:3000/src/api_in/response_1651338166371.json')
            .then(responce => {
                this.nameOfTheWork = responce.data
            })
            .catch(error => {
                this.errors.push(error)
            })
    }
}
</script>

<style scoped lang="scss">
.wrapper {
    max-width: 1440px;
    min-height: 723px;
    margin: 0 auto;
    padding-top: 88px;
    box-sizing: border-box;
    background: rgba(202, 198, 198, 0.67);
    backdrop-filter: blur(15px);
    h2 {
        max-width: 1180px;
        padding-bottom: 40px;
        margin: 0 auto;
        text-align: center;
        font-weight: 400;
        font-size: 48px;
        color: #222222;
    }
    &__work {
        border-top: 1px solid #584C4C;
        &__type {
            margin-top: 34px;
            margin-bottom: 34px;
            cursor: pointer;
            h3 {
                font-weight: 400;
                font-size: 22px;
            }
        }
        &__name {
            p {
                font-weight: 400;
                font-size: 18px;
            }
        }
    }
}
form {
    max-width: 1180px;
    margin: 0 auto;
    border-bottom: 1px solid #584C4C;
}
</style>
