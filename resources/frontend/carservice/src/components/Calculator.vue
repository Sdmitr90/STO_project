<template>
    <section>
        <div class="wrapper">
            <h2>
                Выберите услугу
            </h2>
            <form>
                <div class="wrapper__work" v-for="valueType in typeOfWork" :key="valueType.typeOfWork">
                    <div class="wrapper__work__type" @click="valueType.show = !valueType.show">
                        <h3 @click="createdNameOfTheWork">
                            {{ valueType.title }}
                        </h3>
                    </div>
                    <div class="wrapper__work__name" v-show="valueType.show" v-for="valueName in nameOfTheWork" :key="valueName.nameOfTheWork">
                        <div class="wrapper__work__name__item" v-if="valueType.id === valueName.types">
                            <label>
                                <input type="checkbox" class="wrapper__work__name__item__box">
                                {{ valueName.title }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="wrapper__btn">
                    ЗАПИСАТЬСЯ
                </div>
            </form>
            <div class="wrapper__cost">
                <p>Примерная стоимость работ</p>
                <div class="wrapper__cost__coin">
                    5000 р
                </div>
            </div>
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
    },
    methods: {
        async createdNameOfTheWork() {
            try {
                const response = await axios
                    .get('http://localhost:3000/src/api_in/response_1651338166371.json')
                    .then(responce => {
                        this.nameOfTheWork = responce.data
                        console.log(response);
                    })
            } catch (error) {
                this.errors.push(error);
            }
        }
    }
}
</script>

<style scoped lang="scss">
form {
    max-width: 1180px;
    margin: 0 auto;
    border-top: 1px solid #584C4C;
}

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
        border-bottom: 1px solid #584C4C;
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
            &__item {
                margin-top: 19px;
                margin-bottom: 19px;
                margin-left: 53px;
                font-weight: 400;
                font-size: 18px;
            }
        }
    }
    &__btn {
        width: 296px;
        height: 64px;
        margin: 40px auto 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        background-color: #FF6433;
        border-radius: 16px;
        border: 1px solid #FF6433;
        font-weight: 400;
        font-size: 22px;
        cursor: pointer;
    }
    &__cost {
        margin-top: 40px;
        padding-bottom: 200px;
        display: flex;
        justify-content: space-around;
        p {
            font-size: 28px;
            line-height: 38px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        &__coin {
            width: 296px;
            height: 64px;
            font-weight: 400;
            font-size: 22px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            border: 1px solid #000000;
            border-radius: 16px;
        }
    }
}
</style>
