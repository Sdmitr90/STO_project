<template>

    <div class="mask">
        <div class="mask__wrapper">
            <div class="mask__wrapper__container">
                <div class="mask__wrapper__container__button">
                    <img class="mask__wrapper__container__button-close" @click="closeModal" src="../assets/images/close.png" alt="close">
                </div>

                <div class="mask__wrapper__container-form">
                    <div class="mask__wrapper__container__header">
                        <h2>Записаться на станцию</h2>
                    </div>
                    <div class="mask__wrapper__container__body">
                        <p>Имя</p>
                        <input type="text" v-model="firstName">
                        <p>Телефон</p>
                        <input type="text" v-model="phoneNumber">
                        <p>Дата</p>
                        <input type="date" v-model="dateOfVisit">
                        <p>Комментарий</p>
                        <textarea v-model="comment"></textarea>
                    </div>
                    <div class="mask__wrapper__container__footer">
                        <div class="mask__wrapper__container__footer__btn" @click="closeModal">
                            ЗАПИСАТЬСЯ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "RecordForm",

    data() {
        return {
            firstName: null,
            phoneNumber: null,
            dateOfVisit: null,
            comment: null,
        }
    },

    methods: {
        closeModal() {
            this.$emit('closeModal')
        },

        async createAnEntry() {
            try {
                const response = await axios
                    .post('#', {
                        firstName: this.firstName,
                        phoneNumber: this.phoneNumber,
                        dateOfVisit: this.dateOfVisit,
                        comment: this.comment,
                    })
                    .then(responce => {
                        this.totalPrice = responce.data
                        console.log(response)

                    })
            } catch (error) {
                this.errors.push(error);
            }
        },
    }
}
</script>

<style scoped lang="scss">
.mask {
    position: fixed;
    z-index: 10;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(15px);
    display: table;
    &__wrapper {
        display: table-cell;
        vertical-align: middle;

        &__container {
            width: 533px;
            height: 596px;
            margin: 0 auto;
            background-color: #C4C4C4;
            //box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
            border-radius: 16px;
            &__button {
                display: flex;
                justify-content: end;
                cursor: pointer;
            }
            &__button-close {
                margin-top: 8px;
                margin-right: 8px;
            }
            &__header {
                margin-top: 20px;
                margin-bottom: 20px;
                width: 424px;
                height: 49px;
                text-align: center;
                h2 {
                    font-weight: 600;
                    font-size: 36px;
                    color: #FFFFFF;
                }
            }
            &__body {
                p {
                    font-weight: 400;
                    font-size: 16px;
                    color: #FFFFFF;
                }
                input {
                    margin-bottom: 7.25px;
                    padding-right: 10px;
                    padding-left: 10px;
                    box-sizing: border-box;
                    width: 220px;
                    height: 35px;
                    font-weight: 400;
                    font-size: 16px;
                    border: 1px solid #FFFFFF;
                    background-color: #FFFFFF;
                    border-radius: 16px;
                }
            }
            &__footer {
                &__btn {
                    margin-top: 60px;
                    width: 146px;
                    height: 47px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    font-weight: 400;
                    font-size: 18px;
                    background: #FFFFFF;
                    border-radius: 16px;
                    cursor: pointer;
                }
                &__btn:hover {
                    background: #FF6433;
                }
            }
        }
        &__container-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    }
}

textarea {
    padding-top: 5px;
    padding-right: 10px;
    padding-left: 10px;
    resize: vertical;
    box-sizing: border-box;
    width: 220px;
    min-height: 35px;
    max-height: 110px;
    font-weight: 400;
    font-size: 16px;
    border: 1px solid #FFFFFF;
    background-color: #FFFFFF;
    border-radius: 16px;
}
</style>
