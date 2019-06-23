<!doctype html>
<html lang="ru">
  <head> 
    <title>ПРОГРАММЫ</title>
    <meta name="description" content="Детский развивающий центр в Уручье, Раннее развитие с 1 до 3 лет, Английский язык с 3 до 12 лет, Английский язык с 2х лет - растим билингва, Английский для малышей, Подготовка к школе 4-6 лет, ИЗО-студия, Логопед">
    <meta name="keywords" content="Детский центр уручье, школа развития уручье, детский развивающий центр уручье, подготовка к школе уручье, английский язык для детей уручье, английский язык для малышей уручье, изо-студия уручье, развитие детей уручье, детский клуб уручье,центр развития ребенка уручье, развитие детей уручье,английский язык для самых маленьких уручье">
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/head.php';?>
  </head>
  <body>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/navigation.php';?>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/dbConnectionProgramsPage.php';?>
      <section class="programsPage">
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <h1>ПРОГРАММЫ</h1>
              </div>
            </div>
          </div>
      </section>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/programsPageList.php';?>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>
  </body>
</html>
