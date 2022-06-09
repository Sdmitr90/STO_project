<template>
 <div class="container">
     <div class="about_intro">
            
        <h2 class="About_main_text">О нас</h2>
        <h3 class="About_text">
             Проект представляет собой конверсионный сайт,отвечающий основной потребности автолюбителей – техническое обслуживание своего автомобиля.<br>СТО предлагает посетителю самостоятельно рассчитать примерную стоимость обслуживания транспортного средства и онлайн запись на посещение СТО</h3>   
        <img class="about_img" src="../assets/images/About.png" alt="">             
     </div>
     <div class="about_main">
        <div class="about_main_left">
            <h3 class="about_main_main_text">Мы предоставляем экспертные услуги и стремимся иметь долгосрочные отношения с клиентами</h3>
            <div class="about_main_list">
                <img class = "about_main_list_img" src="../assets/images/3 main.png" alt="">
                <h3 class="text_main_list">Мы работаем качественно</h3>
            </div>
            <div class="about_main_list">
                <img class = "about_main_list_img" src="../assets/images/1 main.png" alt="">
                <h3 class="text_main_list">Мы работаем быстро</h3>        
            </div>
            <div class="about_main_list">
                <img class = "about_main_list_img" src="../assets/images/2 main.png" alt="">
                <h3 class="text_main_list">Мы работаем успешно</h3>            
            </div>
        </div>
        <div class="about_main_right">
            <img class="img_car" src="../assets/images/Car.png" alt="">
        </div>
     </div>
    
     
 </div>
</template>

<script>
   
</script>

<style scoped lang="scss">
.container {
    max-width: 1440px;
    min-height: 723px;
    margin: 0 auto;
    box-sizing: border-box;
}
.about_intro{
    min-height: 400px;
}
.About_main_text{
    font-weight: 800;
    font-size: 64px;
    line-height: 84px;
    width: 268px;
    height: 84px;
    color: #F2F2F2;
    padding-left: 98px;
    padding-top: 30px;
}
.About_text{
    color: #F2F2F2;
    width: 541px;
    height: 96px;
    font-size: 18px;
    line-height: 31.5px;
    padding-left: 96px;

}
.about_img {
    width: 550px;
    padding-left: 96px;
    margin-top: 130px;
}

.about_main_main_text{
    font-weight: 700;
    font-size: 40px;
    color:#F2F2F2;
    padding-left: 96px;
    padding-top: 20px;
    width: 70%;
}

.about_main{
    display: flex;
    padding-top: 50px;
}

.img_car{
    width: 80%;
    padding-right: 600px;
}
.about_main_list{
    display: flex;
    align-items: center;
    padding-left: 96px;
    margin-top: 10px;
}
.text_main_list{
    color: #F2F2F2;
    font-size: 18px;
    margin-left: 10px;
}
</style>