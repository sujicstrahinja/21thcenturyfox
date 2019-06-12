<div class="banner-bottom">
    <div class="container">
        <div class="w3_agile_banner_bottom_grid">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach($newestMovies as $newestMovie)
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="{{ route('single', ['id' => $newestMovie->id]) }}" class="hvr-shutter-out-horizontal"><img src="images/thumbnails/{{ $newestMovie->thumbnail }}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="{{ route('single', ['id' => $newestMovie->id]) }}">{{ $newestMovie->name }}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>{{ $newestMovie->year }}</p>
                                    <div class="block-stars">
                                        <p>Rating: {{ $newestMovie->rating }}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>