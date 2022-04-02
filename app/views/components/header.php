<header>
    <nav>
        <ul class="links hide-links">
            <button class="show-links-button"><i class="fas fa-bars"></i></button>
            <!-- <button class="show-links">show</button> -->
            <li id="language-switch">
                <a href="" id="language-text"> English</a>
                <object data="assets/clientPagesAssets/imgs/svg/language.svg" type=""></object>
            </li>
            <li>
                <object data="assets/clientPagesAssets/imgs/svg/ksa.svg" type=""></object>
                <a href=""> اليمن YER</a>
            </li>
            <li>
                <object data="assets/clientPagesAssets/imgs/svg/location.svg" type=""></object>
                <a href="">سياسة الخصوصية </a>
            </li>
            <li>
                <object data="assets/clientPagesAssets/imgs/svg/i.svg" type=""></object>
                <a href="">المساعدة</a>
            </li>
            <li>
                <object data="assets/clientPagesAssets/imgs/svg/trueShield.svg" type=""></object>
                <a href="">اتصل بنا</a>
            </li>
            <li>
                <object data="assets/clientPagesAssets/imgs/svg/van.svg" type=""></object>
                <a href="">من نحن</a>
            </li>
            <li>
                <object data="assets/clientPagesAssets/imgs/svg/star.svg" type=""></object>
                <a href="home" class="index">الرئيسية</a>
            </li>
            <li id="show-dialog">
                <object data="assets/clientPagesAssets/imgs/svg/profile.svg" type=""></object>
                <a href="">ادخل لحسابك او سجل الان</a>
            </li>
        </ul>
    </nav>

    <!--
    =========
    == login dialog
    =========
  -->
    <div class="overlay hide"></div>
    <div class="logIn hide">
        <button id="hide-dialog">
            <img src="assets/clientPagesAssets/imgs/svg/cancel.svg" alt="" />
        </button>
        <h2>تسجيل الدخول</h2>

        <form action="">
            <input
                type="text"
                name=""
                placeholder="البريد الالكتروني او رقم الجوال"
                id=""
            />
            <div class="password">
                <input type="password" name="" placeholder="كلمة المرور" id="" />
                <a href="" class="forgot">نسيت ؟</a>
            </div>
            <input
                type="submit"
                value=" تسجيل الدخول
        "
            />
        </form>

        <div class="create-account">
            <p>ليس لديك حساب ؟</p>
            <button id="create-new-account">إنشاء حساب جديد</button>
        </div>
    </div>

    <div class="signUp hide">
        <button id="hide-signUpDialog">
            <img src="assets/clientPagesAssets/imgs/svg/cancel.svg" alt="" />
        </button>
        <h2>إنشاء حساب</h2>

        <form action="">
            <div class="phone-number">
                <input type="number" name="" placeholder="رقم الجوال" id="phone" />
                <select name="countryCode" id="countryCode">
                    <option data- value="+970">+970</option>
                        +970
                    </option>
                </select>
            </div>
            <p>سوف نرسل لك <strong>رمز التحقق عن طريق رسالة نصية</strong></p>

            <button class="btn">إرسال رمز التحقق</button>
            <input type="text" name="" placeholder="الإسم الأول" id="" />
            <input type="text" name="" placeholder="أسم العائلة" id="" />
            <input type="email" name="" placeholder="البريد الإلكتروني" id="" />
            <input
                type="email"
                name=""
                placeholder="تأكيد البريد الإلكتروني"
                id=""
            />
            <input type="text" name="" placeholder="كلمة المرور" id="" />

            <div class="check">
                <input type="checkbox" name="agree" id="" />
                <label for="agree">أوافق علي <a href="">الشروط والاحكام</a></label>
            </div>
            <div class="check">
                <input type="checkbox" name="email-post-signIn" id="" />
                <label for="agree">التسجيل للإنضمام للنشرة الإخبارية</label>
            </div>
            <input type="submit" class="btn" value="إنشاء حساب" />
        </form>

        <p class="login">
            لديك حساب ؟
            <a href="">
                تسجيل الدخول <img src="assets/clientPagesAssets/imgs/svg/rightArrowBlue.svg" alt=""
                /></a>
        </p>
    </div>
    <!-- <button id="show-dialog">show dialog</button> -->

    <div class="search-bar">
        <div class="img">
            <img src="assets/clientPagesAssets/imgs/img.png" alt="" />
        </div>

        <div class="bar-icon-container">
            <input type="search" placeholder="البحث" />
            <object
                data="assets/clientPagesAssets/imgs/svg/search.svg"
                class="searchIcon"
                type=""
            ></object>
        </div>

        <div style="position: relative">
            <span id="counter"></span>

            <a href="cart"> </a>
            <object data="assets/clientPagesAssets/imgs/svg/cart.svg" class="cart" type=""></object>
        </div>
    </div>
</header>