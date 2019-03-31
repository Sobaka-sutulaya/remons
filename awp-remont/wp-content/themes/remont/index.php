<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head() ?>
  <title>Remont</title>
</head>
<body>
<div id="my-page">
  <header id="header">
    <div class="container">
      <a href="#" class="header__btn mobile btn">Узнать стоимость</a>
      <div class="left-column">
        <div class="logo no-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Remont">
        </div>
        <h3 class="logo-desc header__desc">
          ремонт квартир
          в москве
        </h3>
      </div>
      <div class="right-column">
        <div class="logo-md no-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Remont">
        </div>
        <div class="header__tel">
          <a href="tel:+7 (327) 143 53 33">+7 (327) 143 53 33</a>
        </div>
        <a href="#" class="header__btn btn no-mobile">Узнать стоимость</a>
        <a href="#mmenu" class="header__burger">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/burger-menu.png" alt="">
        </a href="#mmenu">
        <nav id="mmenu">
          <ul>
            <li><a href="#kinds-section">Виды ремонта</a></li>
            <li class="active"><a href="#calc-section">Рассчитать стоимость</a></li>
            <li><a href="#portfolio-section">Примеры работ</a></li>
            <li><a href="#faqs-section">FAQs</a></li>
            <li><a href="#faqs-section">Наши преимущества</a></li>
            <li><a href="#faqs-section">Контакты</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>
    <section id="main-section">
      <div class="container">
        <div class="content">
          <h1>
            надежный ремонт
            "под ключ"
          </h1>
          <p class="main-desc">
            Lorem ipsum dolor sit amet, nih sonet.
            Option deserunt explicari his an
          </p>
          <a href="#" class="main-btn">Расчитать стоимость ремонта</a>
        </div>
        <div class="team-design no-mobile">
          своя команда дизайнеров
        </div>
      </div>
    </section>
    <section id="kinds-section">
      <div class="container">
        <div class="kinds-slider">
          <div class="kinds-slider__item">
            <div class="kinds-slider__item-title">
              <h3>косметический</h3>
            </div>
          </div>
          <div class="kinds-slider__item">
            <div class="kinds-slider__item-title">
              <h3>капитальный</h3>
            </div>
          </div>
          <div class="kinds-slider__item kinds-active">
            <div class="kinds-slider__item-title">
              <h3>дизайнерский</h3>
            </div>
          </div>
          <div class="btn__wrap">
            <div class="kinds-content__btn">
              <p>от <span>8000</span> руб/м2</p>
              <a href="#" class="btn">Запросить расчет</a>
            </div>
          </div>
        </div>
        <!-- kinds-slider end -->
        <div class="kinds-content">
          <div class="kinds-content__item">
            <h2>
              Косметический
              ремонт
            </h2>
            <p>Quo elitr singulis splendide ne. Cu vidit fabellas conceptam quo. Id nulla meliore mei, vis iisque pertinacia ei. Has te commodo invidunt splendide, option singulis neglegentur cu mel, no duo omnesque offendit facilisis. Luptatum 
            eu vim, saepe propriae eloquentiam ut eam.</p>
            <ul class="kinds-content__list">
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
            </ul>
            <div class="kinds-content__btn">
              <p>от <span>8000</span> руб/м2</p>
              <a href="#" class="btn">Запросить расчет</a>
            </div>
          </div>
          <div class="kinds-content__item">
            <h2>
              Капитальный
              ремонт
            </h2>
            <p>Quo elitr singulis splendide ne. Cu vidit fabellas conceptam quo. Id nulla meliore mei, vis iisque pertinacia ei. Has te commodo invidunt splendide, option singulis neglegentur cu mel, no duo omnesque offendit facilisis. Luptatum 
            eu vim, saepe propriae eloquentiam ut eam.</p>
            <ul class="kinds-content__list">
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
            </ul>
            <div class="kinds-content__btn">
              <p>от <span>8000</span> руб/м2</p>
              <a href="#" class="btn">Запросить расчет</a>
            </div>
          </div>
          <div class="kinds-content__item">
            <h2>
              Дизайнерский
              ремонт
            </h2>
            <p>Quo elitr singulis splendide ne. Cu vidit fabellas conceptam quo. Id nulla meliore mei, vis iisque pertinacia ei. Has te commodo invidunt splendide, option singulis neglegentur cu mel, no duo omnesque offendit facilisis. Luptatum 
            eu vim, saepe propriae eloquentiam ut eam.</p>
            <ul class="kinds-content__list">
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
              <li>Vel in nulla mucius mandamus ei sed</li>
            </ul>
            <div class="kinds-content__btn">
              <p>от <span>8000</span> руб/м2</p>
              <a href="#" class="btn">Запросить расчет</a>
            </div>
          </div>
        </div>
        <!-- kinds-content end -->
      </div>
    </section>
    <section id="calc-section">
      <div class="container">
        <div class="calc__text">
          <h2>Узнайть стоимость?</h2>
          <p>Выберите опции, заполните форму и получите<br>расчёт для своей квартиры.
          </p>
        </div>
        <form class="calc__form">
          <fieldset class="calc__form-select">
            <legend>Уровень ремонта:</legend>
            <select name="repairs-level">
              <option value="косметический">косметический</option> 
              <option value="капитальный">капитальный</option>
              <option value="дизайнерский">дизайнерский</option>
            </select>
          </fieldset>
          <fieldset class="calc__form-select">
            <legend>Тип жилья:</legend>
            <select name="housing-types">
              <option value="вторичное жилье">вторичное жилье</option> 
              <option value="первичное жилье">первичное жилье</option>
              <option value="третичное жилье">третичное жилье</option>
            </select>
          </fieldset>
          <fieldset class="calc__form-checkbox">
            <legend>Помещения:</legend>
            <label>
              <input type="checkbox" name="rooms">
              <span>комнаты</span>
            </label>
            <label>
              <input type="checkbox" name="rooms">
              <span>кухни</span>
            </label>
            <label>
              <input type="checkbox" name="rooms">
              <span>санузел</span>
            </label>
          </fieldset>
          <fieldset class="calc__form-input">
            <legend>Площадь квартиры:</legend>
            <input type="number" name="area" required>
            <label for="area">м<sup>2</sup></label>
          </fieldset>
          <fieldset class="calc__form-input">
            <legend>Количество комнат:</legend>
            <input type="number" name="quantity" required>
            <label for="quantity">комнаты</label>
          </fieldset>
          <fieldset class="calc__form-btn">
            <button type="submit" class="btn">Расчитать стоимость ремонта</button>
          </fieldset>
        </form>
        <!-- calc__form end -->
      </div>
    </section>
    <section id="portfolio-section">
      <div class="container">
        <h2>Наши работы</h2>
        <div class="portfolio__slider">
          <ul class="portfolio__nav">
            <li data-filter="all" class="portfolio__nav-item portfolio__nav-active">показать все</li>
            <li data-filter="bedroom" class="portfolio__nav-item">спальни</li>
            <li data-filter="kitchen" class="portfolio__nav-item">кухни</li>
            <li data-filter="toalet" class="portfolio__nav-item">санузлы</li>
            <li data-filter="design-projects" class="portfolio__nav-item">дизайн-проекты</li>
          </ul>
          <!-- portfolio__nav end -->
          <div class="portfolio__wrap">
            <a class="design-projects" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png" alt="">
            </a>
            <a class="bedroom" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png" alt="">
            </a>
            <a class="bedroom" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png" alt="">
            </a>
            <a class="bedroom" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png" alt="">
            </a>
            <a class="bedroom" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png" alt="">
            </a>
            <a class="bedroom" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.png" alt="">
            </a>
            <a class="design-projects" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png" alt="">
            </a>
            <a class="toalet" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.png" alt="">
            </a>
            <a class="toalet" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.png" alt="">
            </a>
            <a class="toalet" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.png" alt="">
            </a>
            <a class="kitchen" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.png" alt="">
            </a>
            <a class="kitchen" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.png" alt="">
            </a>
            <a class="toalet" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/0.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/0.png" alt="">
            </a>
            <a class="toalet" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/0.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/0.png" alt="">
            </a>
            <a class="kitchen" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.png" alt="">
            </a>
            <a class="design-projects" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png" alt="">
            </a>
            <a class="design-projects" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png" alt="">
            </a>
            <a class="design-projects" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png" alt="">
            </a>
            <a class="design-projects" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png" alt="">
            </a>
            <a class="kitchen" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.png" alt="">
            </a>
            <a class="design-projects" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png" alt="">
            </a>
            <a class="kitchen" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.png" alt="">
            </a>
            <a class="kitchen" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.png">
              <img class="portfolio__wrap-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.png" alt="">
            </a>
          </div>
          <!-- portfolio__wrap end -->
        </div>
      </div>
    </section>
    <section id="faqs-section">
      <div class="container">
        <h2>часто задаваемые<br> вопросы</h2>
        <div class="faqs-wrap">
          <div class="left-column">
            <div class="faqs-wrap__item">
              <h4>Какие этапы выполнения ремонта?</h4>
              <p>Есть ошибочное мнение, что ремонт нужно делать только в теплое время года. Это не так. В жаркую погоду для просушки нужна хорошая вентиляция, а в дождливую погоду влага вообще очень долго стоит и возникает угроза возникновения плесени.</p>
            </div>
            <div class="faqs-wrap__item faqs-active">
              <h4>В какое время лучше делать ремонт?</h4>
              <p>Есть ошибочное мнение, что ремонт нужно делать только в теплое время года. Это не так. В жаркую погоду для просушки нужна хорошая вентиляция,</p>
            </div>
            <div class="faqs-wrap__item mobile">
              <h4>У меня квартира 150 кв.м., как пройдет ремонт?</h4>
              <p>Есть ошибочное мнение, что ремонт нужно делать только в теплое время года. олго стоит и возникает угроза возникновения плесени.</p>
            </div>
            <div class="faqs-wrap__item mobile">
              <h4>Сколько времени потребуется на ремонт?</h4>
              <p>Есть Это не так. В жаркую погоду для просушки нужна хорошая вентиляция, а в дождливую погоду влага вообще очень долго стоит и возникает угроза возникновения плесени.</p>
            </div>
            <div class="faqs-wrap__item mobile">
              <h4>От чего зависит смя года. Это не так.</h4>
              <p>Есть ошибочное мнение, что ремонт нужно делать только в теплое время года. Это не так. В жаркую погоду для просушки нужна хорошая вентиляция, а в дождливую погоду влага вообще очень долго стоит и возникает угроза возникновения плесени.</p>
            </div>
          </div>
          <!-- left column end -->
          <div class="right-column no-mobile">
            <div class="faqs-wrap__item">
              <h4>У меня квартира 150 кв.м., как пройдет ремонт?</h4>
              <p>Есплесени.</p>
            </div>
            <div class="faqs-wrap__item">
              <h4>Сколько времени потребуется на ремонт?</h4>
              <p>Есть ошибочное мнение, что ремонт нужно делать только в теплое время года. Это не так. В жаркую погоду для просушки нужна хорошая вентиляция, а в дождливую погоду влага вообще очень долго стоит и возникает угроза возникновения плесени.</p>
            </div>
            <div class="faqs-wrap__item">
              <h4>От чего зависит стоимость ремонта?</h4>
              <p>Есть ошибочное мнение, что ремонт нужно делать только в теплое время года. Это не так. В жаркую погоду для просушки нужна хорошая вентиляция, а в дождливую погоду влага вообще очень долго стоит и возникает угроза возникновения плесени.</p>
            </div>
          </div>
          <!-- right column end -->
        </div>
      </div>
    </section>
    <section id="review-section">
      <div class="container">
        <div class="review-wrap">
          <h2>оставить заявку на бесплатный замер</h2>
          <p>Перезвоним, проконсультируем, уточним удобное время и запишем вас на бесплатный замер.</p>
          <form action="">
            <input type="text" name="user_name" placeholder="Ваше имя" required>
            <input type="tel" name="user_tel" placeholder="Ваш телефон" required>
            <textarea placeholder="Ваше сообщение...">
            </textarea>
            <button class="btn" type="submit">Отправить запрос</button>
          </form>
        </div>
        <div class="review-btn">
          <a class="btn" href="#">бесплатный вызов</a>
        </div>
      </div>
    </section>
    <section id="advantages-sertificate">  
      <div id="advantages-section">
        <div class="container">
          <h2>Преимущества нашего<br> предложения</h2>
          <div class="advantages-wrap">
            <div class="advantages-wrap__item">
              <img class="advantages-item__img" src="<?php echo get_template_directory_uri(); ?>/img/advantages/icon-1.png" alt="">
              <h3>Начинаем без авансов и предоплат</h3>
              <p>Вы все оплачиваете по факту выполнения работы</p>
            </div>
            <div class="advantages-wrap__item">
              <img class="advantages-item__img" src="<?php echo get_template_directory_uri(); ?>/img/advantages/icon-2.png" alt="">
              <h3>Приступаем к работе в течение 48 часов</h3>
              <p>Через двое суток мы уже начинаем работу</p>
            </div>
            <div class="advantages-wrap__item">
              <img class="advantages-item__img" src="<?php echo get_template_directory_uri(); ?>/img/advantages/icon-3.png" alt="">
              <h3>Производим доставку материалов</h3>
              <p>Вам больше не нужно беспокоиться о доставке</p>
            </div>
          </div>
        </div> 
      </div>
      <div id="sertificate-section">
        <div class="container">
          <h3>Гарантии качества</h3>
          <div class="sertificate-desc">
            <p>Sale atomorum sadipscing ut eos, adhuc volumus te ius, usu populo noster ne. Mea ut clita iuvaret feugiat, duo ex odio appetere.</p>
          </div> 
          <div class="sertificate-wrap">
            <a href="<?php echo get_template_directory_uri(); ?>/img/certificate/1big.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/certificate/1.png" alt="">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/img/certificate/2big.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/certificate/2.png" alt="">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/img/certificate/1big.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/certificate/1.png" alt="">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/img/certificate/2big.png"><img src="<?php echo get_template_directory_uri(); ?>/img/certificate/2.png" alt=""></a>
          </div>
        </div>
      </div>
    </section>
    <section id="contacts-section">
      <div class="container">
        <div class="contacts-map">
          <img src="<?php echo get_template_directory_uri(); ?>/img/contacts/map.png" alt="">
        </div>
        <div class="contacts-content">
          <h2>Наши <br>контакты</h2>
          <p>Наш офис находится в самом центре Москвы, с удобной траспортной развязкой и в 10 минутах от метро Кропоткинская
          </p>
          <ul>
            <li>
              <div class="contacts-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contacts/location.png" alt="">
              </div>
              Summo salutandi facilisis 59/2 honestatis facilisis ne usu.
            </li>
            <li>
              <div class="contacts-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contacts/phone-2.png" alt="">
              </div>
              <div class="contacts-content__tel">
                <a href="tel:+7 (327) 143 53 33">+7 (327) 143 53 33</a>
                <a href="tel:+7 (327) 143 53 33">+7 (327) 143 53 33</a>
              </div>
            </li>
            <li>
              <div class="contacts-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contacts/convert.png" alt="">
              </div>
              testemail@gmail.com
            </li>
            <li>
              <div class="contacts-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contacts/clock.png" alt="">
              </div>
              Пн-Пт   |   9:00 — 21:00 
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="container">
      <div class="footer-column">
        <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
        <h3 class="logo-desc">ремонт квартир в Москве и в области</h3>
      </div>
      <div class="footer-column">
        <a class="footer-nav" href="#kinds-section">Виды ремонта</a>
        <a class="footer-nav" href="#calc-section">Рассчитать стоимость</a>
        <a class="footer-nav" href="#portfolio-section">Примеры работ</a>
      </div>
      <div class="footer-column">
        <a class="footer-nav" href="#faqs-section">FAQs</a>
        <a class="footer-nav" href="#advantages-sertificate">Наши преимущества</a>
        <a class="footer-nav" href="#contacts-section">Контакты</a>
      </div>
      <div class="footer-column btn-column">
        <a class="footer__tel" href="tel:+7 (327) 143 53 33">+7 (327) 143 53 33</a>
        <a class="btn" href="#">Заказать звонок</a>
      </div>
      <div class="footer-copyright">
        <p>©2019 Ремонт. Все права защищены</p>
      </div>
    </div>
  </footer>
</div>
<script>
   $(document).ready(function() {
     $("#mmenu").mmenu({
     });
   });
</script>
<script>
  $('.kinds-slider__item').on('click', function(){
    $('.kinds-slider__item').removeClass('kinds-active');
    $(this).addClass('kinds-active');
  });
</script>
<script type="text/javascript">
 var links = document.querySelectorAll('.kinds-slider__item');
 var content = document.querySelectorAll('.kinds-content__item');
 for(var i=0; i <links.length; i++) {
     (function(i) {
        var link = links[i];
        link.onclick = function() {
            for(var j=0; j <content.length; j++) {
               var display = window.getComputedStyle(content[j]).display;
               if(display == "block") {
                  content[j].style.display = "none";
               }
            }
         content[i].style.display = "block";
         }
     })(i);
 } 
</script>
<!-- ----------- portfolio-section scripts ----------- -->
<script>
  $(document).ready(function() {
    $('.sertificate-wrap').magnificPopup({
      delegate: 'a',
      type: 'image',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
      }
    });
  });
</script>
<script>
  $('.portfolio__nav-item').on('click', function(){
    $('.portfolio__nav-item').removeClass('portfolio__nav-active');
    $(this).addClass('portfolio__nav-active');
  });
</script>
<script>
 $(function() {
   $('.portfolio__wrap').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      dots: true,
      arrows: true,
      responsive: [
         {
           breakpoint: 1024,
           settings: {
             slidesToShow: 3,
             slidesToScroll: 3,
             infinite: true,
             dots: true
           }
         },
         {
           breakpoint: 600,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 2
           }
         }
       ],
      prevArrow: '<img class="portfolio-prevArrow" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/portfolio-arrow.png">',
      nextArrow: '<img class="portfolio-nextArrow" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/portfolio-arrow.png">'
     });

   $(".portfolio__nav-item").on('click', function(){
       var filter = $(this).data('filter');
       $(".portfolio__wrap").slick('slickUnfilter');
       
       if(filter == 'bedroom'){
         $(".portfolio__wrap").slick('slickFilter','.bedroom');
       }
       else if(filter == 'kitchen'){
         $(".portfolio__wrap").slick('slickFilter','.kitchen');
       }
       else if(filter == 'toalet'){
         $(".portfolio__wrap").slick('slickFilter','.toalet');
       }
       else if(filter == 'design-projects'){
         $(".portfolio__wrap").slick('slickFilter','.design-projects');
       }
       else if(filter == 'all'){
         
         $(".portfolio__wrap").slick('slickUnfilter');
       }   
   })
 });
</script>
<script>
  $(document).ready(function() {
    $('.slick-track').magnificPopup({
      delegate: 'a',
      type: 'image',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
      }
    });
  });
</script>
<!-- ----------- faqs script ----------- -->
<script>
  $('.faqs-wrap__item').on('click', function(){
    $('.faqs-wrap__item').removeClass('faqs-active');
    $(this).toggleClass('faqs-active');
  });
</script>
</body>
</html>