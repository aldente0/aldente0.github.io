<?php require_once './php/help-functions.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oranienbaum&family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./styles/style.css">
    <title></title>
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse d-flex navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="#">БЛОГ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">БЕСПЛАТНО</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">СЕМИНАРЫ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ТРЕНИНГИ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">УСЛУГИ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ОТЗЫВЫ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">КОНТАКТЫ</a>
            </li>
          </ul>

          <div class="icons">
            <a href="#!"><img class="icon" src="./icons/inst.png" alt="инст"></a>
            <a href="#!"><img class="icon" src="./icons/fb.png" alt="фб"></a>
            <a href="#!"><img class="icon" src="./icons/vk.png" alt="вк"></a>
          </div>

          <div class="tels">
            <a class="tel" href="tel:+78007070513">8(800)707-05-13</a>
            <a class="tel" href="tel:+74993502335">+7(499)350-23-35</a>
          </div>
        </div>
      </nav>
  </header>
    

  <div class="promo ">
    <div class="promo-logo"><?php printTagPicture('./images/origin/logo-new.png', './images/webp/logo-new.webp', 'promo-logo') ?></div>
    <h1 class="promo-mission">НАША МИССИЯ:</h1>
    <div class="promo-text">«МИЛЛИОН КРАСИВО ОДЕТЫХ ДЕВУШЕК»</div>
  </div>

  <div class="help block">
    <div class="container">
      <div class="help-new">Новинка</div>
      <h2 class="title">СКОРАЯ СТИЛЬНАЯ ПОМОШЬ</h2>
      <p class="help-text">онлайн-консультация стилиста в вашем мобильном телефоне когда вам нужно: на<br>шоппинге, во время разбора гардероба, когда вы подбиратете комплект, просто когда нужен<br>совет</p>
    </div>
    <?php printTagPicture('./images/origin/form-reservation-bigcolor.jpg', './images/webp/form-reservation-bigcolor.webp', 'help-picture'); ?>
  </div>

  <div class="how mb-5 block">
    <div class="container">
      <h2 class="title">КАК ВСЕ ПРОИСХОДИТ</h2>

      <div class="how-text mb-4 text-secondary">После оплаты мы подключаем вас в канал Telegram с нашим стилистом.</div>
      <div class="how-text mb-4 text-secondary">Подключение происходит в рабочее время: ПН-ПТ с 10 до 19 по МСК</div>
      <div class="how-text mb-4 text-secondary">Сразу можете писать свои вопросыю</div>
      <div class="how-text mb-4 text-secondary">Если вы не получаете ответ за 1 час, мы продлеваем время действия услуги на 24 часа.</div>
      <div class="how-text mb-4 text-secondary">А если нужна помощь в выходной день?</div>
      <p class="how-paragraph text-secondary ">Напишите нам об этом как можно раньше, но не менее чем за 24 часа. Получите подтверждение стилиста. Если вы отправляетесь, к примеру, на шопинг в выходной день и вам нужно, чтобы стилист был с вами на связи, такой вариант возможен по предварительной договоренности со стилистом.</p>
    </div>
  </div>
  <div class="container">
  <table>
      <tr>
        <th>ВЫ ПОЛУЧАЕТЕ</th>
        <th>ТЕОРИЯ</th>
        <th>ПРАКТИКА</th>
        <th>VIP</th>
      </tr>
      <tr>
        <td>Все материалы тренинга</td>
        <td><img src="./icons/icons8-галочка-24.svg" alt=""></td>
        <td><img src="./icons/icons8-галочка-24.svg" alt=""></td>
        <td><img src="./icons/icons8-галочка-24.svg" alt=""></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>
  

  
    
    

    <script src="./bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>