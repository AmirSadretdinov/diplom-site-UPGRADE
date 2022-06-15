<!DOCTYPE html> 
<html lang="ru">
<head>
     <link href="style.css" rel=" stylesheet" type=" text/css">
     <link href="css/bootstrap.min.css" rel=" stylesheet">
     <link href="css/fontello.css" rel=" stylesheet">
     <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPGRADE</title>
</head>
<body>
    <div class="glavblock">
        <a name="verh"></a>
        <img id="fon" src="images/fon.png" alt="">
        <img id="fon2" src="images/fon540.png" alt="">
        <div class="header">
            <div class="Obuch"><a href="#study-block" style="color:#FAFCFC; text-decoration:none">Обучение</a></div>
            <div class="Naprav"><a href="#naprav-block" style="color:#FAFCFC; text-decoration:none">Направления</a></div>
            <div class="Price"><a href="#price" style="color:#FAFCFC; text-decoration:none">Цены</a></div>
            <div class="Contact" ><a href="#contact-block" style="color:#FAFCFC; text-decoration:none">Контакты</a></div>
            <button class="menu-open"><img src="images/menu-open.svg" alt=""></button>
            <div class="menu-span">
                <li><a href="#study-block" style="color:#FAFCFC; text-decoration:none">Обучение</a></li>
                <li><a href="#naprav-block" style="color:#FAFCFC; text-decoration:none">Направления</a></li>
                <li><a href="#price" style="color:#FAFCFC; text-decoration:none">Цены</a></li>
                <li><a href="#contact-block" style="color:#FAFCFC; text-decoration:none">Контакты</a></li>
            </div>
        </div>
        <div class="logo1"> 
            <a id="logo1id" href="index.html"> 
                <img class="logo" src="images/logo1.png" /> UPGRADE</a> 
        </div>
        <div id="12345" class="text">
            <p class="up _anim-items _anim-no-hide" > UPGRADE </p>
            <p class="txt _anim-items _anim-no-hide">Гарантируем трудоустройство <br> после обучения</p>
            <button class="study _anim-items _anim-no-hide"><a href="#write-block1" style="text-decoration:none">
                <p class="txt-study-btn">Начать учиться</p></a>
            </button>
        </div>
        <div class="box-studyinfo">
            <a name="study-block">
            <div class="container">
                <div class="row">
                    <div class="col-11 ">
                        <p id="obuch_id" class="text-center text-uppercase mb-4">Об обучении</p>
                    </div>
                </div>
                <div class="row _anim-items _anim-no-hide">
                    <div class="col-xxl-4 col-md-6 col-sm-12 _anim-show" >
                        <div class="structure"> <i class="icon-list-numbered"></i></div>
                        <h4 id="txt-icon">Структурированный материал</h4>
                    </div> 
                    <div class="col-xxl-4 col-md-6 col-sm-12 _anim-show">
                        <div class="structure"> <i class="icon-rouble"></i></div>
                        <h4 id="txt-icon">Оплачиваемая стажировка</h4>
                    </div> 
                    <div class="col-xxl-4 col-md-6 col-sm-12 _anim-show">
                        <div class="structure"> <i class="icon-phone"></i></div>
                        <h4 id="txt-icon">Постоянная связь с наставником</h4>
                    </div> 
                    <div class="col-xxl-4 col-md-6 col-sm-12 _anim-show">
                        <div class="structure"> <i class="icon-code"></i></div>
                        <h4 id="txt-icon">Практические задания</h4>
                    </div> 
                    <div class="col-xxl-4 col-md-6 col-sm-12 _anim-show">
                        <div class="structure"> <i class="icon-laptop"></i></div>
                        <h4 id="txt-icon">Удобный формат обучения</h4>
                    </div> 
                    <div class="col-xxl-4 col-md-6 col-sm-12 _anim-show">
                        <div class="structure"> <i class="icon-videocam"></i></div>
                        <h4 id="txt-icon">40 видеоуроков (10 часов)</h4>
                    </div> 
                    <div class="col-xxl-4 col-md-6 col-sm-12 _anim-show">
                        <div class="structure"> <i class="icon-trophy"></i></div>
                        <h4 id="txt-icon">Опытные наставники</h4>
                    </div> 
                    <div class="col-xxl-4 col-md-6 col-sm-12 _anim-show">
                        <div class="structure"> <i class="icon-graduation-cap"></i></div>
                        <h4 id="txt-icon">Дополнительные полезные материалы</h4>
                    </div> 
                    <div id="tr" class="col-xxl-4 col-md-6 col-sm-12 _anim-show">
                        <div class="structure"> <i class="icon-briefcase"></i></div>
                        <h4 id="txt-icon">Трудостустройство</h4>
                    </div> 
                </div>    
            </div>
        </a>
        </div>
        <div class="write-us _anim-items _anim-no-hide">
            <a name="write-block1"></a>
            <form action="signup.php" method="post">
                <p class="kolvo _anim-show">Количество мест ограничено.
                    Запишись на обучение сейчас!</p>
                <p class="imya _anim-show"> Имя <br>
                    <input id="im" type="text" placeholder="Введите имя" name="name">
                </p>
                <p class="familia _anim-show"> Фамилия <br>
                    <input id="fa" type="text" placeholder="Введите фамилию" name="surname">
                </p>
                <p class="elpochta _anim-show"> Электронная почта <br>
                    <input id="em" type="email" placeholder="Введите email" name="email">
                </p>
                <button class="study1 _anim-show"><p style="font-size: 18px; color:#0A1C20;">Начать учиться</p></button>
            </form>
        </div>
        <div class="trudous">
            <div class="div1 _anim-items _anim-no-hide">
            <p class="img-top _anim-show">
            МЫ ПРИНИМАЕМ НА ОБУЧЕНИЕ РОВНО СТОЛЬКО СТУДЕНТОВ, СКОЛЬКО СТАЖЕРОВ ЗАПРАШИВАЮТ У НАС КОМПАНИИ-ПАРТНЕРЫ, 
            ПОЭТОМУ ВСЕ УЧЕНИКИ ПОЛУЧАЮТ МЕСТО СПЕЦИАЛИСТА В ШТАТЕ В ОДНОЙ ИЗ ТОП-30 КОМПАНИЙ РОССИИ</p>
            <img id="imgtop1" class="img-top1 _anim-show" src="images/top.png">
            </div>
            <div class="div2 _anim-items _anim-no-hide">
            <p class="img-developer _anim-show">
            НОВАЯ ВЫСОКООПЛАЧИВАЕМАЯ ДОЛЖНОСТЬ ЗА 3-4 МЕСЯЦА. ГОТОВИМ УЗКОСПЕЦИАЛИЗИРОВАННЫХ СОТРУДНИКОВ ДЛЯ РАБОТЫ НА ВЫБРАННОМ ПРЕДПРИЯТИИ.</p>
            <img id="imgtop2" class="img-developer2 _anim-show" src="images/developer.png" >
            </div>
        </div>
        <div class="naprav">
            <a name="naprav-block"></a>
            <div class="flex-cont1">
                <div class="box1 _anim-no-hide _anim-items _anim-show"> 
                    <p class="prof">Профессия</p> 
                    <p class="devprof">Java - разработчик</p> 
                    <p class="podrob"><a href="Java-dev.php" style="color:#FAFCFC; text-decoration:none">Подробнее</a></p>
                </div>
                <div class="box2 _anim-no-hide _anim-items _anim-show">
                    <p class="prof"> Профессия</p> 
                    <p class="devprof">Тестировщик</p> 
                    <p class="podrob"><a href="Test.php" style="color:#FAFCFC; text-decoration:none">Подробнее</a></p>
                </div>
            </div>
            <div class="flex-cont2">
                <div class="box3 _anim-no-hide _anim-items _anim-show">
                    <p class="prof">Профессия</p> 
                    <p class="devprof">Frontend - разработчик</p> 
                    <p  class="podrob"><a href="front.php" style="color:#FAFCFC; text-decoration:none">Подробнее</a></p>
                </div>
                <div class="box4 _anim-no-hide _anim-items _anim-show">
                    <p class="prof">Профессия</p> 
                    <p class="devprof">Backend - разработчик</p> 
                    <p  class="podrob"><a href="" style="color:#FAFCFC; text-decoration:none">Подробнее</a></p>
                </div>
                </div>
        </div>
        <div class="our_friends _anim-items _anim-no-hide"> 
                <p class="stroka1 _anim-show">
                    Сотрудничаем <br>
                    с ведущими компаниями</p>
                    <p class="stroka2 _anim-show">Собираем лучшие вакансии в отрасли, готовим к интервью <br>
                    и рекомендуем вас компаниям-партнёрам.</p>
                <div class="logo-cont _anim-items">
                    <div class="flex-elem1 _anim-show"><img src="images/yandex.png" alt="Яндекс" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/gitlab-logo.png" alt="Git" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/sber.png" alt="Sberbank" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/rambler.png" alt="rambler" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/vtb.png" alt="vtb" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/vk-logo.png" alt="vk" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/kasper.png" alt="kasper" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/Amazon.jpg" alt="Amazon" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/Tinkoff-1.png" alt="Tinkoff" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/dilivery.png" alt="dilivery" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/ICL.png" alt="ICL" class="scale"></div>
                    <div class="flex-elem1 _anim-show"><img src="images/okko.jpg" alt="okko" class="scale"></div>
                </div>
        </div>
        <div class="price">
                <a name="price"></a>
                <div class="stoimost _anim-items _anim-no-hide">
                    <p class="stoimost1">
                    Стоимость курса: <br>
                    70 000 ₽
                    </p>
                    <p class="rasrochka">
                    Есть возможность рассрочки от 2800 ₽ <br>
                    в месяц
                    </p>
                    <p class="prirasrochke">
                    При рассрочке до 25 месяцев
                    </p>
                    <p class="result">
                    РЕЗУЛЬТАТ
                    </p>
                    <p class="diplom"> 
                    <strong>Диплом</strong>  <br>
                <strong> 5</strong>  работ в портфолио
                    </p>
                    <p class="garant">
                    ГАРАНТИЯ
                    </p>
                    <p class="trudoustr"> 
                    <strong>Трудостустройство</strong>  <br>
                    после обучения
                    </p>
                </div>
                <div class="box-input _anim-items _anim-no-hide">
                    <form action="signup.php" method="post">
                    <p class="zayavka"> <b> Оставьте заявку</b></p>
                     <p class="vibor-naprav">  Выберете направление
                     </p>

                    <p class="vibor-prof">
                    <input type="radio" name="browser" value="Java - разработчик" name="napravlenie"> Java - разработчик<Br>
                    </p>
                    <p class="vibor-prof">
                    <input type="radio" name="browser" value="Тестировщик" name="napravlenie"> Тестировщик<Br>
                    </p>
                    <p class="vibor-prof">
                    <input type="radio" name="browser" value="Frontend - разработчик" name="napravlenie"> Frontend - разработчик<Br>
                    </p>
                    <p class="vibor-prof">
                    <input type="radio" name="browser" value="Backend - разработчик" name="napravlenie"> Backend - разработчик<Br>
                    </p>
                    <p class="imya1"> Имя <br>
                   <input type="text" size="25" placeholder="Введите имя" name="name">
                    </p>
                    <p class="familia1"> Фамилия <br>
                    <input type="text" size="25" placeholder="Введите фамилию" name="surname">
                    </p>
                    <p class="elpochta1"> Электронная почта <br>
                    <input type="text" size="25" placeholder="Введите email" name="email">
                    </p>
                    <button type="submit" class="study2"><p id="st2" >Начать учиться</p></button>
                    </form>
                
                </div>
        </div>
        <div class="contact">
                <a name="contact-block"></a>
                <div class="contact-info">
                <div class="logo2">
                    <a href="#verh" style="color:#FAFCFC; text-decoration:none"><img class="logo" src="images/logo1.png"/>UPGRADE</a> 
                </div>
                <p class="mail-svyaz">
                E-mail:<a href="mailto:sadretdinov-amir@mail.ru" style="color:#FAFCFC;"> sadretdinov-amir@mail.ru</a>
                </p>
                <p class="mail-svyaz">
                Телефон: <a href="tel:+79046672389" style="color:#FAFCFC;"> +7 904 667-23-89</a>
                </p>
                <p class="upgrade-prava">
                &#169; UPGRADE, 2022
                </p>
                </div>
                <div class="maps">
                <p class="moi-adres">
                Наши координаты: г. Казань,ул.Гагарина д.83
                </p>
                <script type="text/javascript" charset="utf-8" async class="map" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa592fc2702e7a417aab776416cecfffaef25cfa46317ff5b5e2a99781b805b33&amp;width=770&amp;height=348&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/jq.js"></script>  
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
