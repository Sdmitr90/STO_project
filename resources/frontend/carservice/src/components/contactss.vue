<template>
    <div class = "contacts_all">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047213.2839410105!2d80.70625!3d7.857684999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2z0KjRgNC4LdCb0LDQvdC60LA!5e0!3m2!1sru!2sru!4v1652001942956!5m2!1sru!2sru" width="75%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="feedback">
            <h2>Проект СТО</h2>
            <h2 class="phones">Телефон:+79093769072,+79963065430</h2>
            <h2>E-mail:sto999@mail.ru</h2>
            <h2>Адрес:Шри-Ланка</h2>

            <h3>Обратная связь</h3>

            <div class="inputes">
                <input type="text" placeholder="Ваше имя">
                <input type="text" placeholder="Ваш email">
                <input type="text" placeholder="Ваш телефон">
                <input type="text" class="question_input" placeholder="Ваш вопрос">
            </div>
            
            
            <button class="btn_contact">Отправить</button>
        </div>
    </div>
</template>





<style scoped lang ="scss">
    .contacts_all {
        width:100%;
        height: 637px;
        margin-top:40px;
        display: flex;
    }
    .map {
        width: 50%;
    }

    .map iframe {
        display: flex;
        justify-content: center;
        margin-left: 20%;
        margin-top: 15%;
    }
    .feedback {
        width: 50%;
    }
    .feedback h2{
        color: white;  
        width:400px;
        border-radius: 10px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 400;
        font-size: 20px;
        line-height: 36px;     
    }
    .feedback h2:hover{
        color: #f15e31;
        cursor: pointer;
        transition: 1s;
    }
    .feedback h3{
        color: white;  
        width:400px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 50px;
        line-height: 36px;
        margin-top:10px;
    }
    .feedback h3:hover{
        cursor: pointer;
        color: #f15e31;
        transition: 1s;

    }

    .inputes {
        margin-top: 35px;
    }
    .inputes input{
        margin-top: 10px;
        display: flex;
        flex-direction: column;
        width:450px;
        height: 45px;
        color: white;
        background: black;
        font-size:20px;
        border-radius: 10px;
    }
    .inputes input:hover{
        cursor: pointer;
        color: white;
        transition: 1s;
        width:75%;
    }
    ::-webkit-input-placeholder{
        color:#FF6433;
        font-size: 20px;
        font-weight: 400;
    }
    .btn_contact{
        margin-top:30px;
        background: #f15e31;
        color: white;
        height: 64px;
        width: 200px;
        font-size: 28px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
    }
    .btn_contact:hover{
        cursor: pointer;
        color: black;
        transition: 1s;
    }

</style>
