<header class="l-header js-float-menu">
  <a class="l-header__title" href="/">
    <h1>BakeryMeter</h1>
  </a>

  <!-- ハンバーガーメニュー -->
  <div class="c-menuTrigger js-header-trigger">
    <span class="c-menuTrigger__bar js-trigger-bar"></span>
    <span class="c-menuTrigger__bar js-trigger-bar"></span>
    <span class="c-menuTrigger__bar js-trigger-bar"></span>
  </div>

  <nav class="l-nav js-header-toggle-target">
    <!-- 未ログイン時 -->
    @guest
    <!-- PC向けメニュー -->
    <ul class="c-menu">
      <li class="c-menu__item"><a class="c-menu__link" href="">案件を探す</a></li>
      <li class="c-menu__item"><a class="c-menu__link" href="{{ route('register') }}">会員登録</a></li>
      <li class="c-menu__item"><a class="c-menu__link" href="{{ route('login') }}">ログイン</a></li>
    </ul>
    <!-- スマホ向けメニュー -->
    <ul class="c-spMenu">
      <li class="c-spMenu__item"><a class="c-spMenu__link" href="">案件を探す</a></li>
      <li class="c-spMenu__item"><a class="c-spMenu__link" href="{{ route('register') }}">会員登録</a></li>
      <li class="c-spMenu__item"><a class="c-spMenu__link" href="{{ route('login') }}">ログイン</a></li>
    </ul>
    @endguest

    <!-- ログイン時 -->
    @auth
    <!-- PC向けメニュー -->
    <ul class="c-menu">
      <li class="c-menu__item"><a class="c-menu__link" href="">マイページ</a></li>
      <li class="c-menu__item"><a class="c-menu__link" href="">案件を探す</a>
      </li>
      <li class="c-menu__item">
        <a href="" class="c-menu__link" onclick="event.preventDefault();
      document.getElementById('logoutHeader').submit();">ログアウト</a>
        <form id="logoutHeader" action="" method="POST" style="display: none;">
        </form>
      </li>
    </ul>
    <!-- スマホ向けメニュー -->
    <div class="c-spMenu__container">
      <ul class="c-spMenu">
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">マイページ</a></li>
      </ul>
      <p class="c-accordion__btn js-spMenu-tab">依頼者向け</p>
      <ul class="c-accordion__body">
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">依頼する</a></li>
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">依頼した案件</a></li>
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">成約済み案件</a></li>
      </ul>
      <p class="c-accordion__btn js-spMenu-tab">応募者向け</p>
      <ul class="c-accordion__body">
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">案件を探す</a></li>
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">応募中の案件</a></li>
      </ul>
      <p class="c-accordion__btn js-spMenu-tab">共通</p>
      <ul class="c-accordion__body">
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">気になる案件</a></li>
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">コメントした案件</a></li>
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">メッセージ</a></li>
      </ul>
      <p class="c-accordion__btn js-spMenu-tab">設定</p>
      <ul class="c-accordion__body">
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">プロフィール編集</a></li>
        <li class="c-spMenu__item"><a class="c-spMenu__link" href="">パスワード変更</a></li>
        <li class="c-spMenu__item">
          <a href="{{ route('logout') }}" class="c-spMenu__link" onclick="event.preventDefault();
      document.getElementById('logoutForm').submit();">ログアウト</a>
          <form id="logoutForm" action="" method="POST" style="display: none;">
          </form>
        </li>
      </ul>
    </div>
    @endauth

  </nav>
</header>
