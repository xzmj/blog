@extends('layouts.app')

@section('content')
    @component('particals.jumbotron')
        <h3 class="slogen">一息若存，希望不灭.</h3>

        <h6 class="english-name">{{ config('blog.article.description') }}</h6>
    @endcomponent

    @include('widgets.article')

    {{ $articles->links('pagination.default') }}

@endsection