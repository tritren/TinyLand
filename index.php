<!doctype html>
<html lang="ru">
  <head> 
    <title>Eva's TinyLand</title>
    <meta name="description" content="Детский развивающий центр в Уручье, Раннее развитие с 1 до 3 лет, Английский язык с 3 до 12 лет, Английский язык с 2х лет - растим билингва, Английский для малышей, Подготовка к школе 4-6 лет, ИЗО-студия, Логопед">
    <meta name="keywords" content="Детский центр уручье, школа развития уручье, детский развивающий центр уручье, подготовка к школе уручье, английский язык для детей уручье, английский язык для малышей уручье, изо-студия уручье, развитие детей уручье, детский клуб уручье,центр развития ребенка уручье, развитие детей уручье,английский язык для самых маленьких уручье">
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/head.php';?>
  </head>
  <body>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/navigation.php';?>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/dbConnection.php';?>
      <section class="slider">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1>EVA'S TINYLAND - МАЛЕНЬКАЯ СТРАНА БОЛЬШИХ ЗНАНИЙ</h1><img src="img/lineWhite.svg">
              </div>
              <div class="col-sm-6 d-flex align-items-end">
                <img src="img/cild.png" class="img-fluid">
              </div>
              <div class="col-sm-6 d-none d-sm-block">
                <p class="text-left lead">Центр предлагает развивающие занятия для детей в возрасте от 1 года до 12 лет. Разнообразные программы, яркий дидактический материал и дружелюбная атмосфера для Вас и Ваших детей!</p>
              </div>
            </div>
          </div>
      </section>
      <section class="teachers">
        <div class="container">
          <div class="row">
            <div class="titleBlock col-12 text-center">
              <h1>НАШИ ПЕДАГОГИ</h1><img src="img/lineWhite.svg">
            </div>
            <?php getTeachers();?>
          </div>
        </div>
      </section>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/programs.php';?>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/map.php';?>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>
  </body>
</html>
