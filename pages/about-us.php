<section id="about">
    <h1>О нас</h1>
    <hr>
    <div class="flex-container">
        <div class="img-about"></div>
        <p>Компания «ОКnov» основана в 2004 году и является 
            официальным представителем всех крупных заводов-производителей
            в Украине по изготовлению окон, дверей, перегородок, 
            раздвижных систем из металлопластиковых и алюминиевых профилей.
            Компания уже 20 лет занимается изготовлением пластиковых окон 
            и завоевала репутацию проверенного производителя 
            качественных металлопластиковых конструкций.</p>
    </div>
</section>
<section id="contacts">
    <h1>Контакты</h1>
    <hr>
    <div class="flex-container columned">
        <div class="flex-container centered">
            <img src="./icons/about-mail.svg">
            <p>Электронная почта: <b>oknovkiev@gmail.com</b></p>
        </div>
        <div class="flex-container centered">
            <img src="./icons/about-phone.svg">
            <p>Телефоны: <b>050-9749914; 097-7548528; 063-5366637; 067-3287576</b></p>
        </div>
        <div class="flex-container centered">
            <img src="./icons/about-map.svg">
            <p>Адрес: <b>Киев, ул. Ивана Гонты, офис 3-а</b></p>
        </div>
    </div>
</section>
<section id="map">
    <h1>Мы на карте</h1>
    <hr>
    <iframe frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=%D1%83%D0%BB%D0%B8%D1%86%D0%B0%20%D0%98%D0%B2%D0%B0%D0%BD%D0%B0%20%D0%93%D0%BE%D0%BD%D1%82%D1%8B%203%D0%B0%2C%20Kyiv%2C%20Ukraine&key=AIzaSyByaO1Vk1Xv5lta3HjGVMDDZ6Iz0Tvrw4Q" allowfullscreen></iframe>
</section>
<section id="comments">
        <h1>Отзывы о нас</h1>
        <hr>
        <div class="flex-container centered columned">
            <div class="comment">
                <div>
                    <p class="comment-name">Величайший</p>
                    <p class="comment-date">10 марта 2020</p>
                </div>
                <p>Крутой сервис!</p>
            </div>
        </div>
        
        <form name="add_comment" method="post" action="post.php" 
                    class="flex-container centered columned">
                <h3>Оставить комментарий</h3>
                <p>Введите Ваше имя:</p>
                <textarea name="comment-name" rows="1"></textarea>
                <br>
                <p>Введите комментарий:</p>
                <textarea name="comment" rows="4"></textarea>
                <br>
                <input name="" type="submit" value="Отправить" class="button-orange"/>
            </form>
    </section>