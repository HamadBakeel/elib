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
    <link rel="stylesheet" href="assets/clientPagesAssets/css/details.css" />
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
      <section class="container">
        <div class="book-image">
          <div class="big-img">
            <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
          </div>
          <div class="small-imgs">
            <div class="img-container">
              <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />
            </div>
            <div class="img-container">
              <img src="assets/clientPagesAssets/imgs/books/fullSelfTrust.jpg" alt="" />
            </div>
            <div class="img-container">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
            </div>
            <div class="img-container">
              <img src="assets/clientPagesAssets/imgs/books/realConfidence.jpg" alt="" />
            </div>
            <div class="img-container">
              <img src="assets/clientPagesAssets/imgs/books/yourNewSelf.jpg" alt="" />
            </div>
          </div>
          <div class="img-slider-container hide">
            <div class="img-container img-view">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />

              <div class="buttons">
                <img src="assets/clientPagesAssets/imgs/svg/rightArrow.svg" alt="" class="next" />
                <img
                  src="assets/clientPagesAssets/imgs/svg/rightArrow.svg"
                  style="transform: rotateY(180deg)"
                  alt=""
                  class="prev"
                />
              </div>
              <img src="assets/clientPagesAssets/imgs/svg/cancel.svg" alt="" id="exit" />
            </div>
          </div>
        </div>
        <div class="book-info">
          <h2 class="title">كن أنت (كتاب الكتروني)</h2>
          <a href="" class="show-more">عرض المزيد</a>
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="sell-unit">ُ وحدة البيع :Each</p>
          <p><a href="" class="reviews">(المراجعات) 5 نجوم</a></p>
          <p class="type-number">رقم الصنف JBB23Bdsf رقم المنتج 4</p>
          <div class="available-forms">
            <p>الصيغ المتوفرة :</p>
            <div class="eBook">
              <div class="check">
                <input type="radio" name="BookType" id="" />
                <label for="eBook">كتاب إلكتروني</label>
              </div>
              <div class="price">
                <p>12.99</p>
                <p>ر.س</p>
              </div>
            </div>
            <div class="pBook">
              <div class="check">
                <input type="radio" name="BookType" id="" />
                <label for="pBook">كتاب مطبوع</label>
              </div>
              <div class="price">
                <p>17.99</p>
                <p>ر.س</p>
              </div>
            </div>
          </div>
        </div>
        <div class="add-to-cart">
          <div class="note">
            <p>
              <strong>ملاحظة: </strong>سيتم إضافة هذا الكتاب الألكتروني الى
              مكتبتك في قارئ جرير
            </p>
            <a href="">إقرأ المزيد </a>
          </div>
          <div class="add">
            <input type="number" name="" id="amount" />
            <button class="add-item">
              <img src="assets/clientPagesAssets/imgs/svg/cart-1.svg" alt="" />اضف الى السلة
            </button>
          </div>
          <div class="features">
            <div class="feature">
              <img src="assets/clientPagesAssets/imgs/svg/trueShieldTransparent.svg" alt="" />
              <div class="text">شحن امن</div>
              <img src="assets/clientPagesAssets/imgs/svg/questionMark.svg" alt="" />
            </div>
            <div class="feature">
              <img src="assets/clientPagesAssets/imgs/svg/trueShieldTransparent.svg" alt="" />
              <div class="text">أصلي و مضمون</div>
              <img src="assets/clientPagesAssets/imgs/svg/questionMark.svg" alt="" />
            </div>
            <div class="feature">
              <img src="assets/clientPagesAssets/imgs/svg/van.svg" alt="" />
              <div class="text">شحن سريع و مجاني</div>
              <img src="assets/clientPagesAssets/imgs/svg/questionMark.svg" alt="" />
            </div>
          </div>
          <div class="options">
            <button class="option">
              <img src="assets/clientPagesAssets/imgs/svg/watch.svg" alt="" />
              <div class="text">مشاركة</div>
            </button>
            <button class="option">
              <img src="assets/clientPagesAssets/imgs/svg/headsets.svg" alt="" />
              <div class="text">المفضلة</div>
            </button>
            <button class="option">
              <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
              <div class="text">مقارنة</div>
            </button>
          </div>
        </div>
      </section>
      <p class="about">
        كتاب يتحدث عن الكثير من الأشياء المفيدة الخ الخ الخ الخ الخ الخ الخ الخ
        الخ الخ الخ الخ الخلخ الخ الخ الخ الخ الخ الخ الخ الخ الخلخ الخ الخ الخ
        الخ الخ الخ الخ الخ الخلخ الخ الخ الخ الخ الخ الخ الخ الخ الخ
      </p>
      <section class="specs">
        <h2>المواصفات</h2>
        <ul class="shadow">
          <li>
            <p class="spec">رقم الصنف</p>
            <p class="value">JBB23Bdsf</p>
          </li>
          <li>
            <p class="spec">رقم المنتج</p>
            <p class="value">4</p>
          </li>
          <li>
            <p class="spec">المؤلف</p>
            <p class="value">مؤلف ما</p>
          </li>
          <li>
            <p class="spec">الناشر</p>
            <p class="value">دار الحضارة للنشر والتوزيع</p>
          </li>
          <li>
            <p class="spec">تاريخ النشر</p>
            <p class="value">2016</p>
          </li>
          <li>
            <p class="spec">صيغة الكتاب</p>
            <p class="value">eBook</p>
          </li>
          <li>
            <p class="spec">عدد الصفحات</p>
            <p class="value">212</p>
          </li>
          <li>
            <p class="spec">وزن الشحن</p>
            <p class="value">0.1KG</p>
          </li>
          <li>
            <p class="spec">صيغة الملف</p>
            <p class="value">ePub</p>
          </li>
          <li>
            <p class="spec">اللغة</p>
            <p class="value">عربي</p>
          </li>
        </ul>
        <button class="show-details">عرض أكثر</button>
      </section>

      <section class="client-reviews">
        <div class="head">
          <h2>مراجعات العملاء</h2>
          <button class="write-a-review">أكتب مراجعتك</button>
        </div>
        <div class="reviews">
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">كتاب رائع</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">حمد</p>
              </div>
              <p class="date">2021/12/13</p>
            </div>
            <p class="opinion">جيد</p>
          </div>
          <div class="review">
            <p class="text">great</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">sami</p>
              </div>
              <p class="date">2020/1/1</p>
            </div>
            <p class="opinion">Nice</p>
          </div>
          <div class="review">
            <p class="text">أعجبني</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">ساره</p>
              </div>
              <p class="date">2021/4/5</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
        </div>
        <button class="show-reviews-button">إضهار جميع المراجعات(15)</button>
      </section>

      <section class="similar-products">
        <h2>منتجات مشابهة</h2>
        <div class="products-container">
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- ------------------- footer ------------------- -->
    <?php include_once 'components/footer.php'?>

    <script src="assets/clientPagesAssets/Js/slider.js"></script>
    <script src="assets/clientPagesAssets/Js/details.js"></script>
    <!-- <script src="Js/main.js"></script> -->
  </body>
</html>
