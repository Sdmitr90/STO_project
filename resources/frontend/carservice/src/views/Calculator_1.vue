<template>
    <div class="background">
        <main class="main__">
            <div class="wrapper-calc">
                <div class="h2-calc">Выберите услугу</div>
                <hr class="hr" />
                <div class="container-calc">
                    <div class="container-calc__list">
                        <div class="calc__grid-title">
                            <div class="calc__grid-title_name">
                                <div>Наименование работ</div>
                            </div>
                            <div class="calc__grid-title_price">
                                Стоимость, руб.
                            </div>
                        </div>
                        <div class="calc__group">
                            <div class="calc__group-title">
                                Двигатель внутреннего сгорания (ДВС и КПП)
                                <div class="groupBtn" :class="isShowGroup1 ? 'activeShow' : ''" @click="openGroup"></div>
                            </div>
                            <div
                                v-for="(jobItem, idx) in arrayMotor"
                                :key="idx"
                            >
                                <div
                                    class="calc__grid-item"
                                    v-if="isShowGroup1"
                                >
                                    <div class="calc__grid-item_text">
                                        <label>
                                            <input
                                                type="checkbox"
                                                :value="jobItem"
                                                v-model="chosenJobsArray"
                                            />
                                            <span class="labelInput">{{
                                                jobItem.type
                                            }}</span>
                                        </label>
                                    </div>
                                    <h4 class="calc__grid-item_price">
                                        {{ jobItem.money }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <hr class="hr" />
                        <div class="calc__group">
                            <div class="calc__group-title">
                                Ходовая часть
                                <div
                                    class="groupBtn"
                                    :class="isShowGroup2 ? 'activeShow' : ''"
                                    @click="openGroup"
                                ></div>
                            </div>
                            <div
                                v-for="(jobItem, idx) in arrayWheels"
                                :key="idx"
                            >
                                <div
                                    class="calc__grid-item"
                                    v-if="isShowGroup2"
                                >
                                    <div class="calc__grid-item_text">
                                        <label>
                                            <input
                                                type="checkbox"
                                                :value="jobItem"
                                                v-model="chosenJobsArray"
                                            />
                                            <span class="labelInput">{{
                                                jobItem.type
                                            }}</span>
                                        </label>
                                    </div>
                                    <h4 class="calc__grid-item_price">
                                        {{ jobItem.money }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <hr class="hr" />
                    </div>
                </div>
            </div>
            <div class="wrapper-total">
                <div class="h2-total">Примерная стоимость</div>
                <div class="container-total">
                    <div class="total__grid-title">
                        <div class="total__grid-title_name">
                            <h4>Наименование выбранных работ</h4>
                        </div>
                        <h4 class="total__grid-title_price">Стоимость, руб.</h4>
                        <div class="total__grid-title_basket"></div>
                    </div>

                    <div v-for="(chosenJob, idx) in chosenJobsArray" :key="idx">
                        <div class="total__grid-item" v-if="chosenJobsArray">
                            <div class="total__grid-item_text">
                                <h4>
                                    {{ idx + 1 }}.&nbsp;{{ chosenJob.type }}
                                </h4>
                            </div>
                            <h4 class="total__grid-item_price">
                                {{ chosenJob.money }}
                            </h4>
                            <div
                                class="total__grid-item_basket"
                                @click="delJob"
                            >
                                X
                            </div>
                        </div>
                    </div>
                    <div class="total__grid-sum">
                        <div class="total__grid-sum_name">
                            <h4>Общая стоимость выбранных работ</h4>
                        </div>
                        <h4 class="total__grid-sum_price">100</h4>
                        <!-- <div class="total__grid-sum_empty">empty</div> -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isShowGroup1: true,
            isShowGroup2: false,
            arrayMotor: [
                { type: "Замена масла ВДС с фильтром", money: 1125 },
                { type: "Замена воздушного фильтра", money: 1320 },
                { type: "Замена свечей  зажигания", money: 1520 },
                { type: "Замена масла КПП", money: 1020 },
            ],
            arrayWheels: [
                { type: "Замена тормозных колодок", money: 1125 },
                { type: "Замена тормозной жидкости", money: 1320 },
                { type: "Замена аммортизаторов", money: 1520 },
                { type: "Замена ручного тормоза", money: 1020 },
            ],
            chosenJobsArray: [],
        };
    },
    methods: {
        delJob() {
            return this.chosenJobsArray.splice(0, 1);
        },
        openGroup(e) {
            e.stopPropagation();
            this.isShowGroup1 = !this.isShowGroup1;
            this.isShowGroup2 = !this.isShowGroup2;
        },
    },
};
</script>
<style lang="css" scoped>
@import url("https://fonts.googleapis.com/css2?family=Nunito&display=swap");

.background {
    position: relative;
    width: 1920px;
    height: 1212px;
    margin: 0 auto;
    /* background: #FFFFFF; */
    background: url(./car-calc.jpg) 0 0 / cover no-repeat;
}

.main__ {
    position: absolute;
    width: 1440px;
    min-height: 1032px;
    left: 240px;
    top: 85px;
    background: rgba(202, 198, 198, 0.67);
    backdrop-filter: blur(15px);
    display: flex;
    flex-direction: column;
}

.wrapper-calc {
    display: flex;
    flex-direction: column;
    min-height: 100px;
}

.wrapper-total {
    display: flex;
    flex-direction: column;
}

.h2-calc {
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 100%;
    /* identical to box height, or 48px */
    text-align: center;
    color: #000000;
    margin: 88px auto 20px auto;
}

.hr {
    width: 1180px;
    height: 0px;
    left: 0px;
    top: 0px;
    border: 1px solid #584c4c;
    /* Inside auto layout */
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 20px auto 10px auto;
}

.container-calc,
.container-total {
    width: 1180px;
    margin: 1rem auto;
    /* background-color: rgba(255, 255, 255, 0.5); */
}

.container-calc {
    height: 300px;
}

.container-calc__list {
}

.calc__grid-title {
    display: grid;
    grid-template-columns: 70% 30%;
}

.calc__grid-item {
    display: grid;
    grid-template-columns: 70% 30%;
    margin: 12px;
    text-align: left;
}

.calc__grid-title_name {
    text-align: center;
    font-size: 22px;
    color: #fff;
    background-color: #666;
    padding: 2px 5px;
}

.calc__grid-title_price {
    text-align: center;
    font-size: 22px;
    color: #fff;
    padding: 0 3px;
    background-color: #666;
    border-left: 5px solid rgba(202, 198, 198, 0.8);
}

.calc__group {
}

.calc__group-title {
    position: relative;
    height: 30px;
    margin-top: 20px;
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 30px;
    letter-spacing: -0.02em;
    color: #0e0f11;
}

.groupBtn {
    position: absolute;
    display: flex;
    width: 50px;
    height: 50px;
    justify-content: center;
    align-items: center;
    font-size: 36px;
    /* left: 1130px; */
    right: 0;
    top: 0px;
    border-radius: 50%;
    background: #e8f1ff;
}

.groupBtn::before {
    content: "+";
}

.activeShow::before {
    content: "-";
    font-size: 50px;
}

.calc__grid-item_text {
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 100%;
    /* identical to box height, or 18px */

    color: #000000;

    /* Inside auto layout */

    margin: 0px 25px;
    background-color: transparent;
}

.labelInput {
    margin: 0 0 0 25px;
}

.calc__grid-item_price {
    text-align: center;
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 100%;
    color: #000000;
    background-color: transparent;
}

.h2-total {
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 100%;
    /* identical to box height, or 48px */
    text-align: center;
    color: #000000;
    margin: 35px auto 0 auto;
}

.total__grid-title {
    display: grid;
    grid-template-columns: 63% 30% 7%;
}

.total__grid-item {
    display: grid;
    grid-template-columns: 63% 30% 7%;
    margin: 0.5rem 0;
    text-align: left;
}

.total__grid-title_name {
    text-align: center;
    font-size: 22px;
    color: #fff;
    background-color: #666;
    padding: 2px 5px;
}

.total__grid-title_price {
    text-align: center;
    font-size: 22px;
    color: #fff;
    padding: 0 3px;
    background-color: #666;
    border-left: 5px solid rgba(202, 198, 198, 0.99);
}

.total__grid-title_basket {
    text-align: center;
    font-size: 22px;
    color: #fff;
    padding: 0 3px;
    background-color: #666;
    border-left: 5px solid rgba(202, 198, 198, 0.99);
}

.total__grid-title_basket::before {
    content: "X";
}

.total__grid-item_text {
    padding: 2px 5px;
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 100%;
    color: #000000;
    background-color: transparent;
}

.total__grid-item_price {
    text-align: center;
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 100%;
    color: #000000;
    background-color: transparent;
}

.total__grid-item_basket {
    text-align: center;
    font-weight: 400;
    font-size: 18px;
    color: #000000;
    background-color: transparent;
}

.total__grid-item_basket:hover {
    cursor: pointer;
    color: red;
    font-weight: bold;
}

.total__grid-sum {
    margin-top: 50px;
    left: 20;
    display: grid;
    grid-template-columns: 63% 30% 7%;
    margin: 0.5rem 0;
}

.total__grid-sum_name {
    font-size: 22px;
    text-align: right;
    color: #fff;
    background-color: #05688f;
    padding: 2px 5px;
}

.total__grid-sum_price {
    font-size: 22px;
    text-align: center;
    color: #fff;
    padding: 0 3px;
    background-color: #05688f;
    border-left: 5px solid rgba(202, 198, 198, 1);
}
</style>
