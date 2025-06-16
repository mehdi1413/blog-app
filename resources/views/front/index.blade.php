@extends('front.layouts.master')
@section('content')
<main>
    @error('successLogin')
    <div class="alert alert-success" role="alert">{{$message}}</div>
    @enderror
    @include('front.partials.index.trending')
    @include('front.partials.index.top-news')
    @include('front.partials.index.news')
    @include('front.partials.index.divider')
    @include('front.partials.index.suggested')
</main>
@endsection
