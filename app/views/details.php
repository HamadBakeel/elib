<?php
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
            <img src="images/<?= $params->image?>" alt="" />
          </div>
          <!--<div class="small-imgs">
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
          </div>-->
        </div>
        <div class="book-info">
          <h2 class="title"> <?= $params->title?>(<?= $params->format?>)</h2>
          <a href="" class="show-more">?????? ????????????</a>
          <div class="price">
            <p><?= $params->price ?? "9"?></p>
            <p>??.??</p>
          </div>
          <p class="sell-unit">?? ???????? ?????????? :Each  </p>
          <p><a href="" class="reviews">(??????????????????) 5 ????????</a></p>
          <p class="type-number">?????? ?????????? JBB23Bdsf ?????? ???????????? 4</p>
          <div class="available-forms">
            <p>?????????? ???????????????? :</p>
            <div class="eBook">
              <div class="check">
                <input type="radio" name="BookType" id="" />
                <label for="eBook">???????? ????????????????</label>
              </div>
              <div class="price">
                <p>12.99</p>
                <p>??.??</p>
              </div>
            </div>
            <div class="pBook">
              <div class="check">
                <input type="radio" name="BookType" id="" />
                <label for="pBook">???????? ??????????</label>
              </div>
              <div class="price">
                <p>17.99</p>
                <p>??.??</p>
              </div>
            </div>
          </div>
        </div>
        <div class="add-to-cart">
          <div class="note">
            <p>
              <strong>????????????: </strong>???????? ?????????? ?????? ???????????? ???????????????????? ??????
              ???????????? ???? ???????? ????????
            </p>
            <a href="">???????? ???????????? </a>
          </div>
          <div class="add">
            <input type="number" name="" id="amount" />
            <button class="add-item">
              <img src="assets/clientPagesAssets/imgs/svg/cart-1.svg" alt="" />?????? ?????? ??????????
            </button>
          </div>
          <div class="features">
            <div class="feature">
              <img src="assets/clientPagesAssets/imgs/svg/trueShieldTransparent.svg" alt="" />
              <div class="text">?????? ??????</div>
              <img src="assets/clientPagesAssets/imgs/svg/questionMark.svg" alt="" />
            </div>
            <div class="feature">
              <img src="assets/clientPagesAssets/imgs/svg/trueShieldTransparent.svg" alt="" />
              <div class="text">???????? ?? ??????????</div>
              <img src="assets/clientPagesAssets/imgs/svg/questionMark.svg" alt="" />
            </div>
            <div class="feature">
              <img src="assets/clientPagesAssets/imgs/svg/van.svg" alt="" />
              <div class="text">?????? ???????? ?? ??????????</div>
              <img src="assets/clientPagesAssets/imgs/svg/questionMark.svg" alt="" />
            </div>
          </div>
          <div class="options">
            <button class="option">
              <img src="assets/clientPagesAssets/imgs/svg/watch.svg" alt="" />
              <div class="text">????????????</div>
            </button>
            <button class="option">
              <img src="assets/clientPagesAssets/imgs/svg/headsets.svg" alt="" />
              <div class="text">??????????????</div>
            </button>
            <button class="option">
              <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
              <div class="text">????????????</div>
            </button>
          </div>
        </div>
      </section>
      <p class="about">
          <?= $params->description?>
      </p>
      <section class="specs">
        <h2>??????????????????</h2>
        <ul class="shadow">
          <li>
            <p class="spec">?????? ??????????</p>
            <p class="value">JBB23Bdsf</p>
          </li>
          <li>
            <p class="spec">?????? ????????????</p>
            <p class="value">4</p>
          </li>
          <li>
            <p class="spec">????????????</p>
            <p class="value">
                <?php
//                    $name = Model::getItem('publishers','name',$params->publisher_id);
//                    echo $name['name'];
                ?>
            </p>
          </li>
          <li>
            <p class="spec">????????????</p>
            <p class="value">?????? ?????????????? ?????????? ????????????????</p>
          </li>
          <li>
            <p class="spec">?????????? ??????????</p>
            <p class="value">2016</p>
          </li>
          <li>
            <p class="spec">???????? ????????????</p>
            <p class="value">eBook</p>
          </li>
          <li>
            <p class="spec">?????? ??????????????</p>
            <p class="value">212</p>
          </li>
          <li>
            <p class="spec">?????? ??????????</p>
            <p class="value">0.1KG</p>
          </li>
          <li>
            <p class="spec">???????? ??????????</p>
            <p class="value">ePub</p>
          </li>
          <li>
            <p class="spec">??????????</p>
            <p class="value">????????</p>
          </li>
        </ul>
        <button class="show-details">?????? ????????</button>
      </section>

      <section class="client-reviews">
        <div class="head">
          <h2>?????????????? ??????????????</h2>
          <button class="write-a-review">???????? ??????????????</button>
        </div>
        <div class="reviews">
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                ???? ??????
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">???????? ????????</p>
            <div class="details">
              <div class="by">
                ???? ??????
                <p class="user">??????</p>
              </div>
              <p class="date">2021/12/13</p>
            </div>
            <p class="opinion">??????</p>
          </div>
          <div class="review">
            <p class="text">great</p>
            <div class="details">
              <div class="by">
                ???? ??????
                <p class="user">sami</p>
              </div>
              <p class="date">2020/1/1</p>
            </div>
            <p class="opinion">Nice</p>
          </div>
          <div class="review">
            <p class="text">????????????</p>
            <div class="details">
              <div class="by">
                ???? ??????
                <p class="user">????????</p>
              </div>
              <p class="date">2021/4/5</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                ???? ??????
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
                ???? ??????
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
                ???? ??????
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
                ???? ??????
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
                ???? ??????
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
                ???? ??????
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
                ???? ??????
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
                ???? ??????
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
                ???? ??????
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
                ???? ??????
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
                ???? ??????
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
        </div>
        <button class="show-reviews-button">?????????? ???????? ??????????????????(15)</button>
      </section>

      <section class="similar-products">
        <h2>???????????? ????????????</h2>
        <div class="products-container">
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">?????????? ??????????????</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>??.??</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">?????????? ??????????????</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>??.??</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">?????????? ??????????????</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>??.??</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">?????????? ??????????????</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>??.??</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">?????????? ??????????????</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>??.??</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">?????????? ??????????????</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>??.??</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">?????????? ??????????????</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>??.??</p>
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
