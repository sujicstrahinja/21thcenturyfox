@extends('layouts.frontend_layout')

<link rel="stylesheet" href="{{ asset('css/news.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('css/list.css') }}" type="text/css" media="all" />
{{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}

@section('content')
    <!-- faq-banner -->
    <div class="faq">
        <div class="container">
            <div class="agileits-news-top">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}">Single</a></li>
                    <li class="active">{{ $movie->name }}</li>
                </ol>
            </div>
            <div class="agileinfo-news-top-grids">
                <div class="col-md-12 wthree-top-news-left">
                    <div class="wthree-news-left">
                        <div class="wthree-news-left-img">
                            <div data-video="{{ $movie->youtube_link }}" id="video"> <img src="../images/{{ $movie->image }}" alt="" class="img-responsive" /> </div>
                            <h4>{{ $movie->headline }}</h4>
                            <div class="s-author">
                                <p> <i class="fa fa-calendar" aria-hidden="true"></i> {{ $movie->created_at }} &nbsp;&nbsp; </p>
                            </div>
                            <div id="fb-root"></div>
                            <div class="w3-agile-news-text">
                                <p>{!! $movie->description !!} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //faq-banner -->
@endsection