@extends('layouts.frontend_layout')

@section('content')
    <!-- banner -->
    @include('includes.banner')
    <!-- //banner -->
    <!-- banner-bottom -->
    @include('includes.banner_bottom')
    <!-- //banner-bottom -->
    {{--<div class="general_social_icons">--}}
    {{--<nav class="social">--}}
    {{--<ul>--}}
    {{--<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>--}}
    {{--<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>--}}
    {{--<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>--}}
    {{--<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>--}}
    {{--</ul>--}}
    {{--</nav>--}}
    {{--</div>--}}
    <!-- general -->
    @include('includes.general')
    <!-- //general -->
@endsection