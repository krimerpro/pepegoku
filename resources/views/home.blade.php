@extends('layouts.default')
@section('content')

<div id="preloader">
    <img src="{{ asset('img/preloader.gif') }}" alt="Preloader">
</div>
<!-- Page Loader End -->
<div id="wrapper" class="wrapper">
    <div class="vegas-container fxt-template-layout1 has-animation" id="vegas-slide" data-vegas-options='{"delay":4000,"animation":"kenburns", "timer":false, "transition":"fade",
    "slides":[{"src": "{{ asset('img/bg-1.png') }}"}, {"src": "{{ asset('img/bg-2.jpg') }}"},
    {"src": "{{ asset('img/bg-3.jpg') }}"}]}'>
        <!-- Main Content Start Here -->
        <div class="fxt-main-content">
            <div class="fxt-logo translate-bottom-50 transition-100 transition-delay-200">
                <a href="#"><img src="{{ asset('img/logo.png') }}" style="width:300px"></a>
            </div>

            <div class="fxt-sub-title translate-bottom-50 transition-100 transition-delay-400">ETHEREUM</div>
            <h1 class="fxt-main-title translate-bottom-50 transition-100 transition-delay-600">PEPE GOKU</h1>
            <p class="fxt-paragraph translate-bottom-50 transition-100 transition-delay-800">Pepe Goku is a mix between Pepe and Goku. He can rule the cryptocurrency world with his new powers</p>
            <ul class="fxt-btn-group translate-zoomout-10 transition-100 transition-delay-1000">
                <li class="fxt-single-item">
                    <a class="fxt-btn-fill" target="_blank" href="https://t.me/PepeGokuPortal">JOIN US</a>
                </li>
                <li class="fxt-single-item">
                    <a class="fxt-btn-fill" target="_blank" href="https://www.dextools.io/app/en/ether/pair-explorer/">DEXTOOLS CHART</a>
                </li>
                <li class="fxt-single-item">
                    <a class="fxt-btn-fill" target="_blank" href="https://twitter.com/PepeGokuChannel">TWITTER</a>
                </li>
            </ul>
            <div class="fxt-copyright translate-top-50 transition-100 transition-delay-1700">&copy; 2023 PEPEGOKU — All Rights Reserved.</div>
        </div>
        <!-- Main Content End Here -->
    </div>
</div>
@stop
