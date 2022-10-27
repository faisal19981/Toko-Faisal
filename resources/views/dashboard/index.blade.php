@extends('master2')
@section('content')
<div id="layoutSidenav_content">
    <main>
        @include('items.slider')
        @include('items.card')
        @include('items.about')
    </main>
</div>

@endsection