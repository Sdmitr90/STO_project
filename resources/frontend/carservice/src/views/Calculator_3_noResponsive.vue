<template>
    <main class="main__">
        <div class="wrapper-calc">
            <div class="h2-calc">Выберите услугу</div>
            <hr class="hr" />
            <div class="container-calc">
                <div class="container-calc__list">
                    <div class="calc__group">
                        <div class="calc__group-title">
                            <div class="calc__group-title_text">Двигатель внутреннего сгорания (ДВС и КПП)</div>
                            <div class="groupBtn" :class="isShowGroup1 ? 'activeShow' : ''" @click="openGroup1">
                            </div>
                        </div>
                        <div v-for="(jobItem, idx) in arrayMotor" :key="idx">
                            <div class="calc__grid-item" v-if="isShowGroup1">
                                <div class="calc__grid-item_text">
                                    <label>
                                        <input type="checkbox" :value="jobItem" v-model="chosenJobsArray" />
                                        <span class="labelInput">{{
                                                jobItem.type
                                        }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="hr" />
                    <div class="calc__group">
                        <div class="calc__group-title">
                            Ходовая часть
                            <div class="groupBtn" :class="isShowGroup2 ? 'activeShow' : ''" @click="openGroup2">
                            </div>
                        </div>
                        <div v-for="(jobItem, idx) in arrayWheels" :key="idx">
                            <div class="calc__grid-item" v-if="isShowGroup2">
                                <div class="calc__grid-item_text">
                                    <label>
                                        <input type="checkbox" :value="jobItem" v-model="chosenJobsArray" />
                                        <span class="labelInput">{{
                                                jobItem.type
                                        }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="hr" />
                </div>
                <div class="btn">
                    <button class="calcBtn">Рассчитать стоимость</button>
                </div>
                <div class="container__sum">
                    <span class="container__sum_text">Примерная стоимость работ</span>
                    <span class="container__sum_totalSum">5000 p.</span>
                </div>
            </div>
        </div>
    </main>
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
        openGroup1(e) {
            e.stopPropagation();
            this.isShowGroup1 = !this.isShowGroup1;
        },
        openGroup2(e) {
            e.stopPropagation();
            this.isShowGroup2 = !this.isShowGroup2;
        },
    },
};
</script>
<style lang="css" scoped>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap');

.main__ {
    display: flex;
    flex-direction: column;
    /* position: absolute; */
    width: 1440px;
    min-height: 1032px;
    /* left: 240px;
    top: 85px; */
    background: rgba(202, 198, 198, 0.67);
    backdrop-filter: blur(15px);
}

.wrapper-calc {
    display: flex;
    flex-direction: column;
    width: 100%;
    /* min-height: 100px; */
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
    border: 1px solid #584c4c;
    /* Inside auto layout */
    flex: none;
    flex-grow: 0;
    margin: 20px auto;
}

.container-calc {
    display: flex;
    flex-direction: column;
    width: 1180px;
    margin: 0 auto;
}

.container-calc__list {}

.calc__grid-item {
    margin: 12px;
    text-align: left;
}

.calc__group {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
}

.calc__group-title {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 30px;
    letter-spacing: -0.02em;
    color: #0e0f11;
}

.calc__group-title_text {
    display: flex;

}

.groupBtn {
    /* position: absolute; */
    display: flex;
    width: 50px;
    height: 50px;
    justify-content: center;
    align-items: center;
    font-size: 36px;
    /* left: 1130px; */
    /* right: 0;
    top: -10px; */
    border: 1px solid #3F70FF;
    border-radius: 50%;
    background: #e8f1ff;
}

.groupBtn::before {
    font-family: "Nunito", sans-serif;
    content: "+";
    font-weight: 200;
    color: #3F70FF;
}

.groupBtn:hover {
    cursor: pointer;
}

.activeShow::before {
    content: "-";
    font-family: "Nunito", sans-serif;
    font-weight: 200;
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

.btn {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin: 40px auto;
    height: 64px;
}

.calcBtn {
    padding: 10px;
    width: 296px;
    height: 100%;
    background: #ff6433;
    border-radius: 16px;
    border: none;

    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 30px;
    text-align: center;
    color: #000000;
}

.container__sum {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
    height: 64px;
}

.container__sum_totalSum {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    width: 296px;
    height: 100%;
    background-color: transparent;
    border-radius: 16px;
    border: 1px solid #000000;

    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 30px;
    text-align: center;
    color: #000000;
}

.container__sum_text {
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 38px;
    text-align: center;
    letter-spacing: 0.03em;
    color: #000000;
}
</style>
