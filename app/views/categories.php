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
    <link rel="stylesheet" href="assets/clientPagesAssets/css/categories.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@100;200;300;400;500;600;700;800;900&display=swap");
      html {
        font-family: "Tajawal", sans-serif;
      }
    </style>
  </head>
  <body>
  <?php include_once 'components/header.php'?>

    <main>
      <div class="filter-container">
        <!-- <select name="" id="" class="filter">
          <option value="all" disabled selected>الرجاء الإختيار</option>
          <option value="all">الكل</option>
          <option value="c-offers" id="current-offers">العروض الحالية</option>
          <option value="religious" id="religious">الكتب الدينية</option>
          <option value="historical" id="historical">الكتب التاريخية</option>
          <option value="political" id="political">الكتب السياسية</option>
          <option value="economical" id="economical">الكتب اللإقتصادية</option>
          <option value="cooking" id="cooking">كتب الطبخ</option>
          <option value="romantic" id="romantic">
            افضل الروايات الرومانسية
          </option>
        </select> -->
        <div class="price-filter">
          العرض حسب السعر
          <input
            type="range"
            name="price-range"
            id="price-range"
            min="0"
            max="50"
            step="10"
          />
          <p id="range"></p>
        </div>
      </div>
      <!-- <div class="categories"></div> -->

      <!-- =========== current-offers =========== -->
      <div class="current-offers c-offers category container">
        <!-- <div class="offers"> -->


          <!-- <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>9.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div> -->
        <!-- </div> -->
        <!-- </div> -->

        <!-- =========== religious books =========== -->
        <!-- <div class="current-offers religious category"> -->
        <!-- <div class="offers"> -->
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/fullSelfTrust.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>

          <div class="price">
            <p>11.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>50</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>23.9</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>43.9</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>
        <!-- </div> -->

        <!-- =========== historical books =========== -->
        <!-- <div class="current-offers historical category"> -->
        <!-- <div class="offers"> -->
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>12.9</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/fullSelfTrust.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>

          <div class="price">
            <p>1.9</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>2.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>11.29</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>17.5</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->

        <!-- =========== politics books =========== -->
        <!-- <div class="current-offers political category"> -->
        <!-- <div class="offers"> -->
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>46.9</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/fullSelfTrust.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>

          <div class="price">
            <p>23.9</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>6.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>15</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>32.9</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->

        <!-- =========== economy books =========== -->
        <!-- <div class="current-offers economical category"> -->
        <!-- <div class="offers"> -->
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/fullSelfTrust.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>

          <div class="price">
            <p>7.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>45.9</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>9.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>14.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->

        <!-- =========== cooking books =========== -->
        <!-- <div class="current-offers cooking category"> -->
        <!-- <div class="offers"> -->
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/fullSelfTrust.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>

          <div class="price">
            <p>13.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>27.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>37.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>47.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->

        <!-- =========== the best romantic novels =========== -->
        <!-- <div class="current-offers romantic category"> -->
        <!-- <div class="offers"> -->
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>33.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />

            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/fullSelfTrust.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>

          <div class="price">
            <p>22.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>8.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>21.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>25.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
            <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>
      </div>
    </main>

    <!-- ------------------- footer ------------------- -->
   <?php include_once 'components/footer.php'?>

    <script src="Js/main.js"></script>
    <script src="Js/categories.js"></script>
  </body>
</html>
