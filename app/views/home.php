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

      <!-- =========== current-offers =========== -->
      <div class="current-offers" id="first-items-slider">
        <div class="head">
          <p>العروض الحالية</p>
          <a href="categories">عرض الكل</a>
        </div>

        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="right-slide-arrow" alt="" />
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="left-slide-arrow" alt="" />
        <div class="offers">
          <!-- ------ offer 1 ------ -->
          <div class="offer">
            <div class="deadline">
              <p class="special-offer">الوقت المتبقي</p>
              <!-- secs -->
              <div class="deadline-format">
                <div>
                  <h4 class="secs">22</h4>
                  <span>S</span>
                </div>
              </div>
              <!-- mins -->
              <div class="deadline-format">
                <div>
                  <h4 class="mins">22</h4>
                  <span>M</span>
                </div>
              </div>
              <!-- hours -->
              <div class="deadline-format">
                <div>
                  <h4 class="hours">22</h4>
                  <span>H</span>
                </div>
              </div>
              <!-- days -->
              <div class="deadline-format">
                <div>
                  <h4 class="days">22</h4>
                  <span>D</span>
                </div>
              </div>
            </div>

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
            <div class="deadline">
              <p class="special-offer">الوقت المتبقي</p>
              <div class="deadline-format">
                <div>
                  <h4 class="secs">22</h4>
                  <span>S</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="mins">22</h4>
                  <span>M</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="hours">22</h4>
                  <span>H</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="days">22</h4>
                  <span>D</span>
                </div>
              </div>
            </div>
            <img src="assets/clientPagesAssets/imgs/books/fullSelfTrust.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>

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

          <!-- ------ offer 3 ------ -->
          <div class="offer">
            <div class="deadline">
              <p class="special-offer">الوقت المتبقي</p>
              <div class="deadline-format">
                <div>
                  <h4 class="secs">22</h4>
                  <span>S</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="mins">22</h4>
                  <span>M</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="hours">22</h4>
                  <span>H</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="days">22</h4>
                  <span>D</span>
                </div>
              </div>
            </div>
            <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

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

          <!-- ------ offer 4 ------ -->
          <div class="offer">
            <div class="deadline">
              <p class="special-offer">الوقت المتبقي</p>
              <div class="deadline-format">
                <div>
                  <h4 class="secs">22</h4>
                  <span>S</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="mins">22</h4>
                  <span>M</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="hours">22</h4>
                  <span>H</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="days">22</h4>
                  <span>D</span>
                </div>
              </div>
            </div>
            <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

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

          <!-- ------ offer 5 ------ -->
          <div class="offer">
            <div class="deadline">
              <p class="special-offer">الوقت المتبقي</p>
              <div class="deadline-format">
                <div>
                  <h4 class="secs">22</h4>
                  <span>S</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="mins">22</h4>
                  <span>M</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="hours">22</h4>
                  <span>H</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="days">22</h4>
                  <span>D</span>
                </div>
              </div>
            </div>
            <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

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

          <!-- ------ offer 3 ------ -->
          <div class="offer">
            <div class="deadline">
              <p class="special-offer">الوقت المتبقي</p>
              <div class="deadline-format">
                <div>
                  <h4 class="secs">22</h4>
                  <span>S</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="mins">22</h4>
                  <span>M</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="hours">22</h4>
                  <span>H</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="days">22</h4>
                  <span>D</span>
                </div>
              </div>
            </div>
            <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

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

          <!-- ------ offer 4 ------ -->
          <div class="offer">
            <div class="deadline">
              <p class="special-offer">الوقت المتبقي</p>
              <div class="deadline-format">
                <div>
                  <h4 class="secs">22</h4>
                  <span>S</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="mins">22</h4>
                  <span>M</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="hours">22</h4>
                  <span>H</span>
                </div>
              </div>
              <div class="deadline-format">
                <div>
                  <h4 class="days">22</h4>
                  <span>D</span>
                </div>
              </div>
            </div>
            <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

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
        </div>
      </div>

      <!-- =========== religious books =========== -->
      <div class="current-offers" id="second-items-slider">
        <div class="head">
          <p>الكتب الدينية</p>
          <a href="categories">عرض الكل</a>
        </div>
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="right-slide-arrow" alt="" />
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="left-slide-arrow" alt="" />
        <div class="offers">
          <!-- ------ offer 1 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">كن انت (كتاب الكتروني)</p>

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
          <!-- ------ offer 1 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">كن انت (كتاب الكتروني)</p>

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
          <!-- ------ offer 1 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">كن انت (كتاب الكتروني)</p>

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
              <p>13.2</p>
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

          <!-- ------ offer 5 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

            <div class="price">
              <p>17.1</p>
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
      </div>

      <!-- =========== historical books =========== -->
      <div class="current-offers" id="third-items-slider">
        <div class="head">
          <p>الكتب التاريخية</p>
          <a href="categories">عرض الكل</a>
        </div>
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="right-slide-arrow" alt="" />
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="left-slide-arrow" alt="" />
        <div class="offers">
          <!-- ------ offer 1 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">كن انت (كتاب الكتروني)</p>

            <div class="price">
              <p>12.4</p>
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
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">كن انت (كتاب الكتروني)</p>

            <div class="price">
              <p>12.4</p>
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
        </div>
      </div>

      <!-- =========== politics books =========== -->
      <div class="current-offers" id="fourth-items-slider">
        <div class="head">
          <p>الكتب السياسية</p>
          <a href="categories">عرض الكل</a>
        </div>
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="right-slide-arrow" alt="" />
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="left-slide-arrow" alt="" />
        <div class="offers">
          <!-- ------ offer 1 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">كن انت (كتاب الكتروني)</p>

            <div class="price">
              <p>14.1</p>
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
              <p>19.6</p>
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

          <!-- ------ offer 1 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">كن انت (كتاب الكتروني)</p>

            <div class="price">
              <p>14.1</p>
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
              <p>19.6</p>
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
              <p>12.7</p>
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
      </div>

      <!-- =========== economy books =========== -->
      <div class="current-offers" id="fifth-items-slider">
        <div class="head">
          <p>الكتب اللإقتصادية</p>
          <a href="categories">عرض الكل</a>
        </div>
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="right-slide-arrow" alt="" />
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="left-slide-arrow" alt="" />
        <div class="offers">
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
              <p>4.99</p>
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
              <p>17</p>
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
              <p>4.99</p>
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
      </div>

      <!-- =========== cooking books =========== -->
      <div class="current-offers" id="sixth-items-slider">
        <div class="head">
          <p>كتب الطبخ</p>
          <a href="categories">عرض الكل</a>
        </div>
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="right-slide-arrow" alt="" />
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="left-slide-arrow" alt="" />
        <div class="offers">
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

          <!-- ------ offer 3 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

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

          <!-- ------ offer 4 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

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

          <!-- ------ offer 5 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

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

          <!-- ------ offer 3 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

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

          <!-- ------ offer 4 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

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
        </div>
      </div>

      <!-- =========== the best romantic novels =========== -->
      <div class="current-offers" id="seventh-items-slider">
        <div class="head">
          <p>أفضل الروايات الرومانسية</p>
          <a href="categories">عرض الكل</a>
        </div>
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="right-slide-arrow" alt="" />
        <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" class="left-slide-arrow" alt="" />
        <div class="offers">
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

          <!-- ------ offer 3 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

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

          <!-- ------ offer 4 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

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

          <!-- ------ offer 5 ------ -->
          <div class="offer">
            <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />

            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>كتاب الإلكتروني</span>
            </div>

            <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

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
        </div>
      </div>
    </main>

    <!-- ------------------- footer ------------------- -->
    <?php include_once 'components/footer.php'?>

    <script src="assets/clientPagesAssets/Js/slider.js"></script>
    <script src="assets/clientPagesAssets/Js/itemsCarousel.js"></script>
    <script src="assets/clientPagesAssets/Js/main.js"></script>
    <script src="assets/clientPagesAssets/Js/countdown.js"></script>
  </body>
</html>
