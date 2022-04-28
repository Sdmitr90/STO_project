<template>
    <div class="job-wrapper">
        <hr class="hr" />
        <div class="list__group">
            <div class="list__group-title">
                <div class="list__group-title_text">
                    Двигатель внутреннего сгорания (ДВС и КПП)
                </div>
                <div
                    class="groupBtn"
                    :class="isShowGroup1 ? 'activeShow' : ''"
                    @click="openGroup1"
                ></div>
            </div>
            <div v-for="(jobItem, idx) in arrayMotor" :key="idx">
                <div class="list__item" v-if="isShowGroup1">
                    <div class="list__item-text">
                        <label>
                            <input
                                type="checkbox"
                                :value="jobItem"
                                v-model="chosenJobsArray"
                            />
                            <span class="labelInput">{{ jobItem.type }}</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr" />
        <div class="list__group">
            <div class="list__group-title">
                Ходовая часть
                <div
                    class="groupBtn"
                    :class="isShowGroup2 ? 'activeShow' : ''"
                    @click="openGroup2"
                ></div>
            </div>
            <div v-for="(jobItem, idx) in arrayWheels" :key="idx">
                <div class="list__item" v-if="isShowGroup2">
                    <div class="list__item_text">
                        <label>
                            <input
                                type="checkbox"
                                :value="jobItem"
                                v-model="chosenJobsArray"
                            />
                            <span class="labelInput">{{ jobItem.type }}</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr" />
        <div class="btn">
            <button class="calcBtn">Рассчитать стоимость</button>
        </div>
    </div>
</template>
<script>
export default {
    name: "JobList",
    props: {
        isShowGroup1: {
            type: Boolean,
            default: true,
            required: true,
        },
        isShowGroup2: {
            type: Boolean,
            default: false,
            required: true,
        },
        arrayMotor: {
            type: Array,
            required: true,
        },
        arrayWheels: {
            type: Array,
            required: true,
        },
        openGroup1: {
            type: Function,
            required: true,
        },
        openGroup2: {
            type: Function,
            required: true,
        },
    },
};
</script>
<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap");

.job-wrapper {
    display: flex;
    flex-direction: column;
    /* width: 1180px; */
    width: 84%;
    margin: 0 20px;
    margin: 0 auto;
}

.hr {
    width: 100%;
    border: 1px solid #584c4c;
    margin: 20px auto;
}

.list__group {
    display: flex;
    flex-direction: column;
}

.list__group-title {
    display: flex;
    flex-direction: row;
    flex-wrap: no-wrap;
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

.list__group-title_text {
    display: flex;
}

.groupBtn {
    display: flex;
    width: 50px;
    height: 50px;
    justify-content: center;
    align-items: center;
    font-size: 36px;
    border: 1px solid #3f70ff;
    border-radius: 50%;
    background: #e8f1ff;
}

.groupBtn::before {
    font-family: "Nunito", sans-serif;
    content: "+";
    font-weight: 200;
    color: #3f70ff;
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

.list__item {
    margin: 12px;
    text-align: left;
}

.list__item-text {
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 100%;
    color: #000000;
    margin: 0px 25px;
    background-color: transparent;
}

input[type="checkbox"]:checked {
    width: 25px;
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
</style>
