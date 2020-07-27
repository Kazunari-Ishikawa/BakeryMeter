@extends('layouts.app')

@section('title')
<title>{{ config('app.name', 'Laravel') }}</title>
@endsection

@section('description')
<meta name="description" content="BakeryMeterはパン屋さんを探せるサービスです。">
@endsection

@section('keywords')
<meta name="keywords" content="パン屋さん, ベーカリー">
@endsection

@section('content')
<section id="hero">
  <div class="p-hero js-float-target">
    <div class="p-hero__inner">
      <p class="p-hero__text p-hero__text--copy">お気に入りの<br>パン屋さんをさがそう</p>
    </div>
  </div>
</section>

<section class="l-band">
  <div class="p-band">
    <a class="c-btn c-btn--band" href="">パン屋さんを探す</a>
  </div>
</section>

<!-- 説明 -->
<section id="description" class="l-container">
  <div class="l-container__header">
    <h2 class="l-container__title">たったの３ステップでご利用できます。</h2>
  </div>
  <div class="l-container__body">
    <div class="p-desc__container">
      <div class="p-desc">
        <div class="p-desc__body">
          <h3 class="p-desc__title">STEP1</h3>
          <h4 class="p-desc__subtitle">まずは会員登録から</h4>
          <p class="p-desc__text">matchは無料で会員登録できます。メールアドレスのみの30秒かんたん登録！</p>
        </div>
      </div>
      <div class="p-desc">
        <div class="p-desc__body">
          <h3 class="p-desc__title">STEP2</h3>
          <h4 class="p-desc__subtitle">依頼したいなら</h4>
          <p class="p-desc__text">依頼内容を記入して案件を登録。お手軽に依頼できるよう、要点を絞って登録できます。</p>
          <h4 class="p-desc__subtitle">応募したいなら</h4>
          <p class="p-desc__text">matchには単発案件、レベニューシェア案件が多数登録されています。興味のある案件に応募してみましょう。</p>
        </div>
      </div>
      <div class="p-desc">
        <div class="p-desc__body">
          <h3 class="p-desc__title">STEP3</h3>
          <h4 class="p-desc__subtitle">依頼に応募があると</h4>
          <p class="p-desc__text">応募があると登録したアドレスに通知がきます。メッセージ機能で詳細を詰めて依頼完了！ </p>
          <h4 class="p-desc__subtitle">案件に応募すると</h4>
          <p class="p-desc__text">メッセージ機能で依頼者と直接やり取りができます。詳細を詰めれば成約完了。早速案件に取り掛かりましょう！</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-band">
  <div class="p-band">
    <p class="p-band__text">登録はかんたん無料で！</p>
    <a class="c-btn c-btn--band" href="">登録する</a>
  </div>
</section>

<section id="cardList" class="l-container">
  <div class="l-container__header">
    <h2 class="l-container__title">案件を探す</h2>
  </div>

  <div class="l-container__body u-mb0">
    <div class="c-cardList">
      <div class="c-cardList__header">
        <h3 class="c-cardList__title">種類から探す</h3>
      </div>
      <div class="c-cardList__body c-cardList__body--lg">
        <a href="/works?type=1" class="c-card c-card--lg">
          <div class="c-card__body">
            <h4 class="c-card__title c-card__title--lg">単発案件</h4>
            <p class="c-card__text">単発案件とは、「仕事一件当たり◯◯円」という形で報酬が支払われます。</p>
            <p class="c-card__text">要求スキルが易しいものから高レベルのものまで、<span>豊富な案件から選ぶ</span>ことができます。</p>
          </div>
        </a>
        <a href="/works?type=2" class="c-card c-card--lg">
          <div class="c-card__body">
            <h4 class="c-card__title c-card__title--lg">レベニューシェア</h4>
            <p class="c-card__text">レベニューシェアとは、開発したサービスの収益をあらかじめ決めておいた配分で分け合う方式です。</p>
            <p class="c-card__text">依頼者にとっては<span>初期費用を抑える</span>ことができ、請負者にとっては<span>継続的に収益を得る</span>ことができます。</p>
          </div>
        </a>
      </div>
    </div>

    <div id="categoryList" class="c-cardList">
      <div class="c-cardList__header">
        <h3 class="c-cardList__title">カテゴリから探す</h3>
      </div>
      <div class="c-cardList__body">
        <a class="c-card" href="/works?category=1">
          <div class="c-card__body">
            <img src="" alt="カテゴリ1" class="c-card__img">
            <h4 class="c-card__title">ホームページ制作</h4>
          </div>
        </a>
        <a class="c-card" href="/works?category=2">
          <div class="c-card__body">
            <img src="" alt="カテゴリ2" class="c-card__img">
            <h4 class="c-card__title">WEBシステム開発</h4>
          </div>
        </a>
        <a class="c-card" href="/works?category=3">
          <div class="c-card__body">
            <img src="" alt="カテゴリ3" class="c-card__img">
            <h4 class="c-card__title">業務システム開発</h4>
          </div>
        </a>

      </div>
    </div>
  </div>
</section>

@endsection
