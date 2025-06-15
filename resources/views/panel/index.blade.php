@extends('panel.layouts.master')
@section('content')
<main>
    <section class="py-4">
        <div class="container">
            <div class="row g-4">
                @include('panel.partials.index.counter')
                @include('panel.partials.index.chart')
                @include('panel.partials.index.latest-blog')
                @include('panel.partials.index.recent-comment')
                @include('panel.partials.index.notice')
                @include('panel.partials.index.views')
                @include('panel.partials.index.news')
            </div>
        </div>
    </section>
</main>
@endsection
