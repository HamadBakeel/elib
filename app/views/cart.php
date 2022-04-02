<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

      <link rel="stylesheet" href="assets/clientPagesAssets/css/normalize.css"  type="text/css">
      <link rel="stylesheet" href="assets/clientPagesAssets/css/all.min.css"  type="text/css">
      <link rel="stylesheet" href="assets/clientPagesAssets/css/cart.css"  type="text/css">
      <link rel="stylesheet" href="assets/clientPagesAssets/css/style.css"  type="text/css">
      <link rel="stylesheet" href="assets/clientPagesAssets/css/signUpDialg.css"  type="text/css">
      <link rel="stylesheet" href="assets/clientPagesAssets/css/loginDialog.css"  type="text/css">

  </head>
  <body>
  <?php include_once 'components/header.php'?>

  <div class="cart-container">
      <div class="cart-head">
        <img src="assets/clientPagesAssets/imgs/svg/cart.svg" alt=""/>
        <h2>السلة</h2>
        <p class="items-number">(3منتجات)</p>
      </div>
      <div class="cart">
        <div class="cart-items">
          <div class="cart-item">
            <div class="item-head">
              <div class="title">
                <img src="assets/clientPagesAssets/imgs/books/beYou.jpg" alt="" />
                <p class="name">كن انت (كتاب إالكتروني)</p>
                <p>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</p>
              </div>
              <div class="price">
                <p>17.99</p>
                <p>ر.س</p>
              </div>
            </div>
            <div class="item-note">
              <div class="note">
                <p>
                  <strong>ملاحظة: </strong>هذا لمنتج رقمي وسيتم توصيله من خلال
                  البريد الالكتروني
                </p>
                <a href="">كيفية الحصول على المنتج ؟</a>
              </div>
              <input type="number" name="" class="amount"  />
            </div>
            <button class="delete-button">
              <img src="assets/clientPagesAssets/imgs/svg/cancel (3).svg" alt="" />
              احذف
            </button>
          </div>

          <div class="cart-item">
            <div class="item-head">
              <div class="title">
                <img src="assets/clientPagesAssets/imgs/books/karmaDiagnosis.jpg" alt="" />
                <p class="name">تشخيص الكارما (كتاب إالكتروني)</p>
                <p>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</p>
              </div>
              <div class="price">
                <p>17.99</p>
                <p>ر.س</p>
              </div>
            </div>
            <div class="item-note">
              <div class="note">
                <p>
                  <strong>ملاحظة: </strong>هذا لمنتج رقمي وسيتم توصيله من خلال
                  البريد الالكتروني
                </p>
                <a href="">كيفية الحصول على المنتج ؟</a>
              </div>
              <input type="number" name="" class="amount"  />
            </div>
            <button class="delete-button">
              <img src="assets/clientPagesAssets/imgs/svg/cancel (3).svg" alt="" />
              احذف
            </button>
          </div>

          <div class="cart-item">
            <div class="item-head">
              <div class="title">
                <img src="assets/clientPagesAssets/imgs/books/fullSelfTrust.jpg" alt="" />
                <p class="name">الثقة الكاملة بالنفس (كتاب إالكتروني)</p>
                <p>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</p>
              </div>
              <div class="price">
                <p>17.99</p>
                <p>ر.س</p>
              </div>
            </div>
            <div class="item-note">
              <div class="note">
                <p>
                  <strong>ملاحظة: </strong>هذا لمنتج رقمي وسيتم توصيله من خلال
                  البريد الالكتروني
                </p>
                <a href="">كيفية الحصول على المنتج ؟</a>
              </div>
              <input type="number" name="" class="amount" id="" />
            </div>
            <button class="delete-button">
              <img src="assets/clientPagesAssets/imgs/svg/cancel (3).svg" alt="" />
              احذف
            </button>
          </div>
        </div>
        <div class="bill">
          <div class="bill-head">
            <div class="total">
              <p>المجموع</p>
              <div class="price">
                <p style="color: #4a5367">17.99</p>
                <p style="color: #4a5367">ر.س</p>
              </div>
            </div>
            <div class="total charge-cost">
              <p>تكاليف الشحن</p>
              <div class="price">
                <p style="color: #2ca556">مجاني</p>
                <p></p>
              </div>
            </div>
            <div class="total" id="total">
              <p style="color: #d61020; font-size: 1.3rem">المجموع الكلي</p>
              <div class="price">
                <p style="color: #d61020">33.3</p>
                <p>ر.س</p>
              </div>
            </div>
          </div>
          <div class="bill-bottom">
            <p>
              بالضغط على "إنهاء التسوق فانت توافق على
              <a href="">الشروط والاحكام وسياسة الخصوصية</a>
            </p>
            <a href="checkout" class="finish-shopping">إنهاء التسوق</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ------------------- footer ------------------- -->
<?php include_once 'components/footer.php'?>

<script src="assets/clientPagesAssets/Js/main.js"></script>
  </body>
</html>
