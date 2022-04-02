<?php
use \coding\app\controllers\HomeController;
use \coding\app\models\Model;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elib-Project</title>

    <link rel="stylesheet" href="assets/clientPagesAssets/css/style.css" />
    <link rel="stylesheet" href="assets/clientPagesAssets/css/normalize.css" />
    <link rel="stylesheet" href="assets/clientPagesAssets/css/all.min.css" />
    <link rel="stylesheet" href="assets/clientPagesAssets/css/slider.css" />
    <link rel="stylesheet" href="assets/clientPagesAssets/css/loginDialog.css" />
    <link rel="stylesheet" href="assets/clientPagesAssets/css/signUpDialog.css" />
    <link rel="stylesheet" href="assets/clientPagesAssets/css/count-down.css" />
    <link rel="stylesheet" id="language" href="assets/clientPagesAssets/css/arabic.css" />
    <style>
      /*@import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@100;200;300;400;500;600;700;800;900&display=swap");*/
      /*html {*/
      /*  font-family: "Tajawal", sans-serif;*/
      /*}*/
    </style>
  </head>
  <body>
  <?php include_once 'components/header.php'?>
    <main>

      <div class="brows-by-section">
        <p
          style="
            color: #5e2f26;
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 10px;
          "
        >
          تصفح حسب القسم
        </p>
        <div class="sections">
          <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" alt="" />
          <div class="section">
            <img src="assets/clientPagesAssets/imgs/svg/tv.svg" alt="" />
            <p style="color: #5e2f26">دين</p>
          </div>
          <div class="section">
            <img src="assets/clientPagesAssets/imgs/svg/watch.svg" alt="" />
            <p style="color: #f67828">تاريخ</p>
          </div>
          <div class="section">
            <img src="assets/clientPagesAssets/imgs/svg/keyboard.svg" alt="" />
            <p style="color: #76689a">سياسة</p>
          </div>
          <div class="section">
            <img src="assets/clientPagesAssets/imgs/svg/phoneCharger.svg" alt="" />
            <p style="color: #bc4077">روايات</p>
          </div>
          <div class="section">
            <img src="assets/clientPagesAssets/imgs/svg/homeWifi.svg" alt="" />
            <p style="color: #0089b6">اقتصاد</p>
          </div>
          <div class="section">
            <img src="assets/clientPagesAssets/imgs/svg/gamingHand.svg" alt="" />
            <p style="color: #7db344">طبخ</p>
          </div>
          <div class="section">
            <img src="assets/clientPagesAssets/imgs/svg/@.svg" alt="" />
            <p style="color: #9c223f">تربية</p>
          </div>
          <img
            src="assets/clientPagesAssets/imgs/svg/rightArrow.svg"
            style="
              transform: rotateY(180deg);
              /* position: absolute;
              top: 54px;
              left: 39%; */
            "
            alt=""
          />
        </div>
      </div>
    <?php foreach ($params['categories'] as $category):
        $books = Model::getAllItems('books',$category['id']);
        if(count($books) > 0):
        $categoryName = Model::getItem('categories','name',$category['id']);
        ?>
      <div class="current-offers" id="first-items-slider">
        <div class="head">
          <p><?= $categoryName['name'] ?></p>
          <a href="categories/<?=$category['id']?>">عرض الكل</a>
        </div>
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="right-slide-arrow" alt="" />
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="left-slide-arrow" alt="" />
        <div class="offers">
            <?php
                foreach ($books as $book) {
                    echo HomeController::displayBook($book);
                }
            endif;
            ?>
        </div>
      </div>
      <?php endforeach; ?>


    </main>

    <!-- ------------------- footer ------------------- -->
    <?php include_once 'components/footer.php'?>

    <script src="assets/clientPagesAssets/Js/slider.js"></script>
    <script src="assets/clientPagesAssets/Js/itemsCarousel.js"></script>
    <script src="assets/clientPagesAssets/Js/main.js"></script>
    <script src="assets/clientPagesAssets/Js/countdown.js"></script>
  </body>
</html>
