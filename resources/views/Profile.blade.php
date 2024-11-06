<style>
  .profile-container { display: flex; flex-direction: column; }
  .profile-content { background-color: #fbfbfb; display: flex; width: 100%; flex-direction: column; overflow: hidden; }
  .profile-header { width: 100%; }
  .profile-header-content { display: flex; gap: 20px; }
  .profile-main { display: flex; flex-direction: column; line-height: normal; width: 81%; }
  .profile-info { background-color: #fff; box-shadow: 0 2px 8px 2px rgba(95, 158, 160, 0.05); display: flex; width: 100%; flex-direction: column; justify-content: center; margin: 0 auto; padding: 45px 28px; }
  .profile-details { display: flex; width: 100%; align-items: center; gap: 40px 75px; justify-content: flex-end; flex-wrap: wrap; }
  .user-info { align-self: stretch; display: flex; min-width: 240px; align-items: center; gap: 16px; justify-content: flex-start; flex-wrap: wrap; flex-grow: 1; width: 873px; margin: auto 0; }
  .user-name-rating { align-self: stretch; display: flex; align-items: center; gap: 8px; justify-content: flex-start; margin: auto 0; }
  .user-name-container { align-self: stretch; display: flex; flex-direction: column; justify-content: flex-start; width: 123px; margin: auto 0; }
  .user-name { align-self: stretch; width: 100%; color: #5f9ea0; text-align: right; letter-spacing: -0.14px; font: 400 14px Araboto-Normal, sans-serif; }
  .user-rating { align-self: flex-end; display: flex; align-items: center; gap: 2px; justify-content: flex-end; }
  .star-icon { aspect-ratio: 1; object-fit: contain; object-position: center; width: 14px; align-self: stretch; margin: auto 0; }
  .user-avatar { aspect-ratio: 1; object-fit: contain; object-position: center; width: 44px; border-radius: 50%; align-self: stretch; margin: auto 0; }
  .user-balance { align-items: center; border-radius: 10px; background: #fff; display: flex; gap: 8px; color: #5f9ea0; text-align: right; letter-spacing: -0.14px; justify-content: flex-start; margin: auto 0; padding: 14px 8px; font: 400 14px Araboto-Normal, sans-serif; }
  .balance-text { align-self: stretch; margin: auto 0; }
  .balance-icon { aspect-ratio: 1; object-fit: contain; object-position: center; width: 24px; align-self: stretch; margin: auto 0; }
  .user-display-name { align-self: stretch; width: 118px; gap: 40px 75px; color: #001e21; text-align: right; flex-grow: 1; margin: auto 0; font: all-small-caps 400 24px Araboto-Bold, -apple-system, Roboto, Helvetica, sans-serif; }
  .profile-sidebar { display: flex; flex-direction: column; line-height: normal; width: 19%; }
  .sidebar-content { background-color: #fff; display: flex; flex-grow: 1; flex-direction: column; width: 100%; padding: 33px 54px 14px; }
  .sidebar-logo { aspect-ratio: 1.53; object-fit: contain; object-position: center; width: 147px; }
  .main-content { display: flex; gap: 18px; font-weight: 400; flex-wrap: wrap; }
  .sidebar-nav { aspect-ratio: 0.23; object-fit: contain; object-position: center; width: 203px; max-width: 100%; }
  .registration-form { border-radius: 32px; background-color: #fff; align-self: flex-start; display: flex; margin-top: 26px; flex-direction: column; justify-content: center; padding: 42px; }
  .form-container { display: flex; width: 100%; flex-direction: column; justify-content: center; }
  .form-title { color: #1b676f; text-align: right; align-self: flex-end; font: 24px Araboto-Medium, sans-serif; }
  .form-fields { display: flex; margin-top: 32px; width: 100%; flex-direction: column; justify-content: flex-start; }
  .form-row { display: flex; width: 100%; align-items: center; gap: 40px 48px; text-align: right; justify-content: flex-start; flex-wrap: wrap; }
  .form-field { border-radius: 8px; background-color: #fff; align-self: stretch; position: relative; display: flex; min-width: 240px; min-height: 48px; flex-direction: column; justify-content: flex-start; flex-grow: 1; width: 319px; margin: auto 0; }
  .input-container { justify-content: flex-end; align-items: center; border-radius: 8px; border: 1px solid #1b676f; background-color: #fff; z-index: 0; display: flex; min-height: 48px; width: 100%; gap: 4px; color: #001e21; padding: 12px 8px; font: 16px Araboto-Light, sans-serif; }
  .input-text { align-self: stretch; min-width: 240px; overflow: hidden; flex: 1; margin: auto 0; }
  .input-icon { aspect-ratio: 1; object-fit: contain; object-position: center; width: 24px; align-self: stretch; margin: auto 0; }
  .input-label { font-feature-settings: "liga" off, "clig" off; align-self: flex-start; background-color: #fff; position: absolute; gap: 10px; color: #1b676f; right: 8px; top: -10px; padding: 0 4px; font: 14px Araboto-Medium, sans-serif; }
  .gender-field { align-self: stretch; display: flex; min-width: 240px; align-items: center; gap: 40px 100px; font-size: 14px; text-align: center; justify-content: space-between; flex-grow: 1; width: 319px; margin: auto 0; }
  .gender-options { align-self: stretch; display: flex; align-items: flex-start; gap: 20px; font-family: Araboto-Light, sans-serif; justify-content: flex-start; margin: auto 0; }
  .gender-option { border-radius: 8px; background-color: #fff; display: flex; min-height: 58px; flex-direction: column; justify-content: flex-start; width: 89px; }
  .gender-input { align-self: stretch; flex: 1; border-radius: 8px; border: 1px solid #eaecec; min-height: 48px; width: 100%; gap: 4px; padding: 14px 8px; }
  .gender-label { color: #1b676f; font-family: Araboto-Medium, sans-serif; align-self: stretch; margin: auto 0; }
  .form-buttons { display: flex; margin-top: 38px; width: 100%; align-items: flex-start; gap: 40px 100px; text-align: center; justify-content: space-between; flex-wrap: wrap; font: 14px Araboto-Medium, sans-serif; }
  .save-button { font-variant: all-small-caps; align-self: stretch; flex: 1; border-radius: 10px; background: #1b676f; min-width: 240px; min-height: 58px; gap: 8px; color: #fff; width: 402px; padding: 24px 16px; }
  .change-password { font-variant: all-small-caps; align-self: stretch; width: 187px; border-bottom: 1px solid #5f9ea0; min-height: 58px; gap: 8px; color: #5f9ea0; padding: 24px 0; }
  .sidebar-menu { box-shadow: 0 -4px 8px 2px rgba(95, 158, 160, 0.05); display: flex; flex-direction: column; color: #1b676f; text-align: right; padding: 24px 18px 235px; font: 16px Araboto-Normal, sans-serif; }
  .menu-items { display: flex; width: 100%; flex-direction: column; justify-content: flex-start; }
  .menu-item { border-radius: 10px; background-color: #fff; display: flex; width: 100%; align-items: center; gap: 8px; justify-content: flex-end; padding: 9px 16px; }
  .menu-text { font-variant: all-small-caps; align-self: stretch; flex: 1; flex-basis: 0%; margin: auto 0; }
  .menu-icon { aspect-ratio: 1; object-fit: contain; object-position: center; width: 24px; align-self: stretch; margin: auto 0; }
  
  @media (max-width: 991px) {
    .profile-content { max-width: 100%; }
    .profile-header { max-width: 100%; }
    .profile-header-content { flex-direction: column; align-items: stretch; gap: 0; }
    .profile-main { width: 100%; }
    .profile-info { max-width: 100%; padding-left: 20px; }
    .profile-details { max-width: 100%; }
    .user-info { max-width: 100%; }
    .profile-sidebar { width: 100%; }
    .sidebar-content { padding: 0 20px; }
    .registration-form { max-width: 100%; padding: 0 20px; }
    .form-container { max-width: 100%; }
    .form-fields { max-width: 100%; }
    .form-row { max-width: 100%; }
    .input-container { white-space: initial; }
    .input-text { white-space: initial; }
    .gender-options { white-space: initial; }
    .gender-option { white-space: initial; }
    .gender-input { white-space: initial; }
    .save-button { white-space: initial; }
    .sidebar-menu { padding-bottom: 100px; }
  }
  </style>
  
  <section class="profile-container">
    <div class="profile-content">
      <header class="profile-header">
        <div class="profile-header-content">
          <main class="profile-main">
            <div class="profile-info">
              <div class="profile-details">
                <div class="user-info">
                  <div class="user-name-rating">
                    <div class="user-name-container">
                      <p class="user-name">اسم المستخدم</p>
                      <div class="user-rating">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e78952fcbf42e06a6731807b3822ee05957d996185d8b9acf1770d24fd18cb20?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Star rating" class="star-icon" />
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b58c515927b9d12486fc96348d5b410ae6e269e2fa7cbc61f24896f3c16a1df0?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Star rating" class="star-icon" />
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/06df9feda21a21d9a45bc4748eec841b55cbc929f2c9e964cef18c4bbfc66fb0?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Star rating" class="star-icon" />
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/06df9feda21a21d9a45bc4748eec841b55cbc929f2c9e964cef18c4bbfc66fb0?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Star rating" class="star-icon" />
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/06df9feda21a21d9a45bc4748eec841b55cbc929f2c9e964cef18c4bbfc66fb0?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Star rating" class="star-icon" />
                      </div>
                    </div>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/59233da14939b8fac403722ceebefad1c5f87f97bd15c98e15acab8055239b08?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="User avatar" class="user-avatar" />
                  </div>
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4501490f5687d23934ade5160085dcf2159110d7fca2389a140d8d9ec73f73cf?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="User badge" class="user-avatar" />
                  <div class="user-balance">
                    <p class="balance-text">الرصيد : 880 دقيقة</p>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ef435ff12a22efc2917f22f3c74471acc5d5165ba1b393b7a38555f801250866?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Balance icon" class="balance-icon" />
                  </div>
                </div>
                <h2 class="user-display-name">اسم المستخدم</h2>
              </div>
            </div>
          </main>
          <aside class="profile-sidebar">
            <div class="sidebar-content">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a4c524d9d863d3ca1788f72e021fa159e571794131f403cd8f8a6f496e22153d?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Sidebar logo" class="sidebar-logo" />
            </div>
          </aside>
        </div>
      </header>
      <div class="main-content">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ce383c120cda6854703860116787c91f5da1f0ae8b1aac6f96aee9d9e29fa298?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Navigation" class="sidebar-nav" />
        <form class="registration-form">
          <div class="form-container">
            <h3 class="form-title">معلومات التسجيل</h3>
            <div class="form-fields">
              <div class="form-row">
                <div class="form-field">
                  <div class="input-container">
                    <input type="email" id="email" class="input-text" placeholder="user@gmail.com" aria-label="البريد الاكتروني" />
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ab8272f32b3fc551b86c89cb27871b303bbd358c906cf59eaebe73bee594e91e?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Email icon" class="input-icon" />
                  </div>
                  <label for="email" class="input-label">البريد الاكتروني</label>
                </div>
                <div class="form-field">
                  <div class="input-container">
                    <input type="text" id="username" class="input-text" placeholder="محمد احمد" aria-label="اسم المستخدم" />
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4540e4690c3d0736587777b8e6d7a5b243c0f14410288964e19b37da22e3ebda?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="User icon" class="input-icon" />
                  </div>
                  <label for="username" class="input-label">اسم المستخدم</label>
                </div>
              </div>
              <div class="form-row">
                <div class="form-field">
                  <div class="input-container">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbffc4212ee93b311ad47374e95ea85928214b815798326ce6c589c866887017?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Calendar icon" class="input-icon" />
                    <input type="text" id="birthdate" class="input-text" placeholder="15 / Aug / 1997" aria-label="تاريخ الميلاد" />
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6ba6f31f8156a7018d41c55b3dd26c85766d6b4c9f288612f92f46b1977173ea?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Dropdown icon" class="input-icon" />
                  </div>
                  <label for="birthdate" class="input-label">تاريخ الميلاد</label>
                </div>
                <div class="form-field">
                  <div class="input-container">
                    <input type="tel" id="phone" class="input-text" placeholder="+966123456789" aria-label="رقم الهاتف" />
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7c1ca73ba36b697d291794087b4d2c098159797c733a2374ca1d8b291abc5b3e?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Phone icon" class="input-icon" />
                  </div>
                  <label for="phone" class="input-label">رقم الهاتف</label>
                </div>
              </div>
              <div class="form-row">
                <div class="gender-field">
                  <div class="gender-options">
                    <div class="gender-option">
                      <input type="radio" id="male" name="gender" class="gender-input" value="male" />
                      <label for="male" class="gender-label">ذكر</label>
                    </div>
                    <div class="gender-option">
                      <input type="radio" id="female" name="gender" class="gender-input" value="female" />
                      <label for="female" class="gender-label">انثى</label>
                    </div>
                  </div>
                  <label class="gender-label">الجنس :</label>
                </div>
                <div class="form-field">
                  <div class="input-container">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbffc4212ee93b311ad47374e95ea85928214b815798326ce6c589c866887017?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Location icon" class="input-icon" />
                    <select id="country" class="input-text" aria-label="البلد">
                      <option value="UAE">الامارات العربية المتحددة</option>
                    </select>
                  </div>
                  <label for="country" class="input-label">البلد</label>
                </div>
              </div>
              <div class="form-row">
                <div class="form-field">
                  <div class="input-container">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbffc4212ee93b311ad47374e95ea85928214b815798326ce6c589c866887017?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Flag icon" class="input-icon" />
                    <select id="nationality" class="input-text" aria-label="الجنسية">
                      <option value="arabic">عربي</option>
                    </select>
                  </div>
                  <label for="nationality" class="input-label">الجنسية</label>
                </div>
              </div>
            </div>
          </div>
         {{-- <div class="form-content"> --}}
            <h2 class="form-title">معلومات إضافية</h2>
            {{-- <div class="form-fields"> --}}
              <div class="field-row">
                {{-- <div class="field-row"> --}}
                  {{-- <fieldset class="call-recording"> --}}
                    <lable style="display:inline" class="call-recording-label">هل توافق على تسجيل المكالمات ؟</lable>
                    {{-- <div class="call-recording-options"> --}}
                      {{-- <div class="recording-option"> --}}
                        {{-- <input type="radio" id="record-no" name="call-recording" value="no" />
                        <label for="record-no">لا</label>
                        <input type="radio" id="record-yes" name="call-recording" value="yes" />
                        <label for="record-yes">نعم</label> --}}
                      {{-- </div> --}}
                      {{-- <div class="recording-option">
                       
                      </div> --}}
                    {{-- </div> --}}
                  {{-- </fieldset> --}}
                {{-- </div> --}}
              {{-- </div> --}}
            {{-- </div> --}}
                <label for="quran-parts" class="quran-label">ما هو مقدار حفظك للقران (بالاجزاء) ؟</label>
                <div class="quran-counter">
                  <button type="button" class="counter-button" aria-label="Increase Quran parts">+</button>
                  <input type="number" id="quran-parts" class="counter-input" value="1" min="1" max="30" />
                  <button type="button" class="counter-button" aria-label="Decrease Quran parts">-</button>
                </div>
          </div>
             
            
            
          <div class="form-buttons">
            <button type="submit" class="save-button">حفظ</button>
            <button type="button" class="change-password">تغيير كلمة المرور</button>
          </div>
        </form>
      {{-- </div> --}}
      <nav class="sidebar-menu">
        <ul class="menu-items">
          <li class="menu-item">
            <span class="menu-text">لوحة التحكم</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/96a86db8fedbd89badb204f8e5e2809e054883bd2bcebc7b8956544eee89cf25?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Dashboard icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">المسارات</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ec6e95a4b49ea858ea38ccf5f683ef8f96d14955fd1c40b633fe308ddd6bc57d?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Paths icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">الخطط</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e6197c72f2433d1bde3f33d5f339ee7a6329b5a213896f6a72cbd22934264d4?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Plans icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">الجلسات</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ae178fd3b2faaee405ac98fd718446c44647ece271c03724f6073dc55e276223?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Sessions icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">المعلمون</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c2f2e54afff84cccdb4f660b78d84966e7af50830857e3a4fee3b457ab102da3?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Teachers icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">التقوييم</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3c8260c7f027502c5230ed700b921996e7bb75cbe913ce0a4266e9f3722b65c8?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Calendar icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">الباقات</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/5d38aeafa5620b09c819d08446805e3a57f473de394da17fc207afd992655426?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Packages icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">سجل الدفع</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8678fd02bbd610339d2f7191bae4b46cdb816c098a3eca05bb982eb327b07801?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Payment history icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">عن صناعة القارئ</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/5f26e5937161127283c04165d6ac1e4f7e2b8df18a4294e57b9dd18caa89d0d0?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="About icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">تواصل معنا</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7f04c1a368e7d980feb996b0816a400873a1ef245a31ff9d5f600e311996033d?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Contact us icon" class="menu-icon" />
          </li>
          <li class="menu-item">
            <span class="menu-text">تسجيل الخروج</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/80360734d90f485d3006303f68b78d4e56889e5eff3f2a081057af6f5bfa5cb1?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737" alt="Logout icon" class="menu-icon" />
          </li>
        </ul>
      </nav>
    </div>
  </div>
  </section>