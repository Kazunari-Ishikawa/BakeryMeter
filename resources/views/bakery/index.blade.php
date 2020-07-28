@extends('layouts.app')

@section('title')
<title>一覧 - {{ config('app.name', 'Laravel') }}</title>
@endsection

@section('content')
<div class="l-container--withSide">

  @include('components.search')

  <div class="l-container__body--withSide">
    <bakery-list></bakery-list>
  </div>

</div>
@endsection
