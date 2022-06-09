<template>
    <section>
        <div class="wrapper">
            <h2>
                Выберите услугу
            </h2>
            <form>
                <div class="wrapper__work" v-for="valueType in typeOfWork" :key="valueType.typeOfWork">
                    <h3 class="wrapper__work__type" @click="valueType.show = !valueType.show, createdNameOfTheWork(valueType.id)">

                        {{ valueType.title }}

                    </h3>
                    <div class="wrapper__work__name" v-show="valueType.show" v-for="valueName in nameOfTheWork" :key="valueName.nameOfTheWork">
                        <label class="wrapper__work__name__item" v-if="valueType.id === valueName.types">
                            <input type="checkbox" class="wrapper__work__name__item__box" v-model="idCheckedNames" :value="valueName.id">

                            {{ valueName.title }}

                        </label>
                    </div>
                </div>
                <div class="wrapper__btn-set">
                    <div class="wrapper__btn" @click="createdCheckedNames">
                        РАССЧИТАТЬ
                    </div>
                    <div class="wrapper__btn" id="show-modal" @click="showModal">
                        ЗАПИСАТЬСЯ
                    </div>
                </div>

            </form>
            <div class="wrapper__cost">
                <p>Примерная стоимость работ</p>
                <div class="wrapper__cost__coin">
                    {{ totalPrice }} руб.
                </div>
            </div>
        </div>
        <RecordForm v-if="isShowModal" @closeModal="closeModal" />
    </section>
</template>
<script>
import axios from 'axios'

import RecordForm from "./RecordForm.vue";

export default {
    name: "Calculator",
    components: {RecordForm},
    data() {
        return {
            typeOfWork: [],
            nameOfTheWork: [],
            errors: [],


            idCheckedNames: [],
            totalPrice: 0,

            isShowModal: false,

            idCheckedNames: [], //потом сделать функцию аксиос и передавать массив в нее для отправки
            totalPrice: 0


        }
    },
    created() {
        axios
            .get('http://sto/TechServiceType')
            .then(responce => {
                this.typeOfWork = responce.data
            })
            .catch(error => {
                this.errors.push(error)
            })
    },
    methods: {
        async createdNameOfTheWork(idType) {
            try {
                const response = await axios

                    .get('http://sto/TechServiceType/' + idType)
                    .then(responce => {
                        this.nameOfTheWork = responce.data
                    })
            } catch (error) {
                this.errors.push(error);
            }
        },
        async createdCheckedNames() {
            try {
                const response = await axios
                    .post('http://sto/calculate', {
                        id: this.idCheckedNames
                    })
                    .then(responce => {
                        this.totalPrice = responce.data
                        console.log(response)

                    })
            } catch (error) {
                this.errors.push(error);
            }

        },
        showModal() {
            this.isShowModal = true;
        },
        closeModal() {
            this.isShowModal = false;
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
    min-height: 100%;
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
            margin-top: 19px;
            margin-bottom: 19px;
            margin-left: 53px;
            font-weight: 400;
            font-size: 18px;
        }
    }
    &__btn-set {
        display: flex;
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
        justify-content: space-evenly;
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
