<template>
    <div class="flex-cont">
        <div class="calc-wrapper">
            <div class="h2-calc">Выберите услугу</div>
            <div class="calc-main">
                <v-job-list :isShowGroup1="isShowGroup1" :isShowGroup2="isShowGroup2" :arrayMotor="arrayMotor"
                    :arrayWheels="arrayWheels" :openGroup1="openGroup1" :openGroup2="openGroup2"></v-job-list>
                <v-total-sum></v-total-sum>
            </div>
        </div>
    </div>
</template>
<script>
import TotalSum from "../components/TotalSum.vue";
import JobList from "../components/JobList.vue";

export default {
    components: {
        "v-total-sum": TotalSum,
        "v-job-list": JobList,
    },
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
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap");

.flex-cont {
    width: 76%;
    margin: 0 auto;
}
.calc-wrapper {
    display: flex;
    height: 100%;
    flex-direction: column;
    background: rgba(202, 198, 198, 0.67);
    backdrop-filter: blur(15px);
}

.calc-main {
    display: flex;
    flex-direction: column;
    padding: 0 20px;
    margin-bottom: 50px;
}

.h2-calc {
    font-family: "Nunito", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 100%;
    text-align: center;
    color: #000000;
    margin: 88px auto 20px auto;
}
</style>
