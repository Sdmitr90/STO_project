<template>
    <div>
        <div class="container__sum">
            <span class="container__sum_text">Примерная стоимость работ</span>
            <span class="container__sum_totalSum">5000 p.</span>
        </div>
    </div>
</template>
<script>
export default {
    name: "TotalSum",
};
</script>
<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap");

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
