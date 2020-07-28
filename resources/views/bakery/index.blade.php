@extends('layouts.app')

@section('title')
<title>一覧 - {{ config('app.name', 'Laravel') }}</title>
@endsection

@section('content')
<div class="l-container--withSide">

  @include('components.search')

  <div class="l-container__body--withSide">
    <div class="p-bakeryList">
      ここに検索結果が入る
      <bakery-list></bakery-list>
    </div>
  </div>

</div>
@endsection
