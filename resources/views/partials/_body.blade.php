<div id="loading">
    @include('partials._body_loader')
</div>
@include('partials._body_header')

<div class="wrapper">
    @include('partials._body_sidebar')

    <div class="content-page">
        {{ $slot }}
    </div>

    @include('partials._body_footer')
</div>
@include('partials._scripts')
