<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <title>Flex test</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <header>
      <div class="wrapper">
         <nav class="navbar">
            <div class="main">
               <div class="logo">
                  <img src="img/patriot.png" alt="patriot">
                  <span class="patriot">patriot</span>
               </div>
               <img class="img0" src="img/line.png" alt="">
               <div class="menu" id="menu">
                  <li class="has-submenu">
                     <a href="#">Услуги &#9662;</a>
                     <ul class="submenu">
                        <li><a href="#">Управление активами и инвестиции</a></li>
                        <li><a href="#">Автоматизация бизнеса </a></li>
                        <li><a href="#">Финансовый аудит</a></li>
                        <li><a href="#">Юридическая практика</a></li>
                        <li><a href="#">Лизинг</a></li>
                        <li><a href="#">Информационная безопасность</a></li>
                     </ul>
                  </li>
                  <li class="has-submenu">
                     <a href="#">Продукция &#9662;</a>
                     <ul class="submenu">
                        <li><a href="#">Управление активами и инвестиции</a></li>
                        <li><a href="#">Автоматизация бизнеса </a></li>
                        <li><a href="#">Финансовый аудит</a></li>
                        <li><a href="#">Юридическая практика</a></li>
                        <li><a href="#">Лизинг</a></li>
                        <li><a href="#">Информационная безопасность</a></li>
                     </ul>
                  </li>
                  <li class="has-submenu">
                     <a href="#">Проекты &#9662;</a>
                     <ul class="submenu">
                        <li><a href="#">Управление активами и инвестиции</a></li>
                        <li><a href="#">Автоматизация бизнеса </a></li>
                        <li><a href="#">Финансовый аудит</a></li>
                        <li><a href="#">Юридическая практика</a></li>
                        <li><a href="#">Лизинг</a></li>
                        <li><a href="#">Информационная безопасность</a></li>
                     </ul>
                  </li>
                  <li class="has-submenu">
                     <a href="#">Компания &#9662;</a>
                     <ul class="submenu">
                        <li><a href="#">Управление активами и инвестиции</a></li>
                        <li><a href="#">Автоматизация бизнеса </a></li>
                        <li><a href="#">Финансовый аудит</a></li>
                        <li><a href="#">Юридическая практика</a></li>
                        <li><a href="#">Лизинг</a></li>
                        <li><a href="#">Информационная безопасность</a></li>
                     </ul>
                  </li>
                  <li>
                     <div class="pin">
                        <img src="img/svg/pin.svg" alt="">
                        <span>Санкт-Петербург</span>
                     </div>
                  </li>
                  <li>
                     <div class="tel1">
                        <img src="img/svg/phone.svg" alt="">
                        <span>+7 (800) 941-34-28</span>
                     </div>
                  </li>
               </div>
            </div>
            <div class="contacts">
               <div class="pin2">
                  <img src="img/svg/pin.svg" alt="">
                  <span>Санкт-Петербург</span>
               </div>
               <img class="img1" src="img/line.png" alt="">
               <div class="tel">
                  <img src="img/svg/phone.svg" alt="">
                  <span>+7 (800) 941-34-28</span>
               </div>
               <img class="img2" src="img/line.png" alt="">

            </div>
            <div class="burger" onclick="toggleMenu()">
               <div class="line"></div>
               <div class="line"></div>
               <div class="line"></div>
            </div>
         </nav>
      </div>
   </header>
   <main>
      <div class="general">
         <div class="wrapper">
            <div class="container">
               <div class="flex">
                  <div class="flex-left">
                     <div class="text">
                        <h1>Patriot — это ключ к успешному бизнесу по всей территории РФ</h1>
                        <p>Роскошный, быстрый, практичный автомобиль на выгодных условиях лизинга. Станьте ближе к мечте
                           и
                           сократите налог на имущество в три раза.</p>
                     </div>
                     <div class="slider_flex">
                        <div class="slider"><img src="img/svg/Vector left.svg" alt=""></div>
                        <div class="slider"><img src="img/svg/Vector right.svg" alt=""></div>
                     </div>

                  </div>
                  <div class="flex-right">
                     <div class="form">
                        <h2>Оставить заявку</h2>
                        <p>Заполните форму и мы свяжемся с вами, чтобы узнать детали вашего проекта.</p>
                        <form action="php/index.php" method="get">
                           <div class="media1024">
                              <div>
                                 <p>Имя*</p>
                                 <input type="text" name="name">
                              </div>
                              <div>
                                 <p>Телефон*</p>
                                 <input type="number" name="phone">
                              </div>
                           </div>
                           <div class="info">
                              <div class="check">
                                 <input type="checkbox">
                                 <label>Я принимаю условия передачи информации</label>
                              </div>
                              <input type="submit" value="Связаться с нами">
                              <?php
                              if (isset($_SESSION['error'])) { ?>
                                 <span class="error"><?= $_SESSION['message'] ?></span>
                              <?php unset($_SESSION['error']);
                              }
                              ?>
                              <?php
                              if (isset($_SESSION['success'])) { ?>
                                 <span class="success"><?= $_SESSION['message'] ?></span>
                              <?php unset($_SESSION['success']);
                              }
                              ?>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="pagination">
                  <div class="circle"></div>
                  <div class="circle"></div>
                  <div class="circle"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="rate">
         <div class="wrapper">
            <div class="container">
               <div class="rate-text">
                  <h3>Тарифы</h3>
                  <div class="slider_flex_rate">
                     <div class="slider_rate"><img src="img/svg/Vector left.svg" alt=""></div>
                     <div class="slider_rate"><img src="img/svg/Vector right.svg" alt=""></div>
                  </div>
               </div>
               <div class="card-flex">
                  <div class="owl-carousel">
                     <div class="card">
                        <div class="card-top">
                           <span>Акция</span>
                           <span>новинка</span>
                           <span>хит</span>
                           <p>Лайт</p>
                        </div>
                        <div class="card-text">
                           <div class="visa">
                              <p>Visa, Master Card, МИР</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Apple Pay, Android Pay</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Электронные кошельки</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Оборот</p>
                              <p>от 0 до 200 т.р.</p>
                           </div>
                           <div class="visa">
                              <p>120 000 ₽</p>
                              <button>Оплатить</button>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-top">
                           <span>Акция</span>
                           <span>хит</span>
                           <p>Лайт</p>
                        </div>
                        <div class="card-text">
                           <div class="visa">
                              <p>Visa, Master Card, МИР</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Apple Pay, Android Pay</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Электронные кошельки</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Оборот</p>
                              <p>от 0 до 200 т.р.</p>
                           </div>
                           <div class="visa">
                              <div class="sale">
                                 <p>120 000 ₽</p>
                                 <p>125 500 ₽</p>
                              </div>
                              <button>Оплатить</button>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-top">
                           <span>Акция</span>
                           <span>новинка</span>
                           <span>хит</span>
                           <p>Лайт</p>
                        </div>
                        <div class="card-text">
                           <div class="visa">
                              <p>Visa, Master Card, МИР</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Apple Pay, Android Pay</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Электронные кошельки</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Оборот</p>
                              <p>от 0 до 200 т.р.</p>
                           </div>
                           <div class="visa">
                              <p>120 000 ₽</p>
                              <button>Оплатить</button>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-top">
                           <span>Акция</span>
                           <span>новинка</span>
                           <span>хит</span>
                           <p>Лайт</p>
                        </div>
                        <div class="card-text">
                           <div class="visa">
                              <p>Visa, Master Card, МИР</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Apple Pay, Android Pay</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Электронные кошельки</p>
                              <p>3,7%</p>
                           </div>
                           <div class="visa">
                              <p>Оборот</p>
                              <p>от 0 до 200 т.р.</p>
                           </div>
                           <div class="visa">
                              <p>120 000 ₽</p>
                              <button>Оплатить</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="pagination">
                  <div class="circle"></div>
                  <div class="circle"></div>
                  <div class="circle"></div>
               </div>
            </div>

         </div>
      </div>
   </main>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>