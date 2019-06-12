<div class="general">
    <h4 class="latest-text w3_latest_text">Featured Movies</h4>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Featured</a></li>
                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Top viewed</a></li>
                <li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Top Rating</a></li>
                <li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="w3_agile_featured_movies">
                        @foreach($featuredMovies as $featuredMovie)
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="{{ route('single', ['id' => $featuredMovie->id]) }}" class="hvr-shutter-out-horizontal"><img src="images/thumbnails/{{ $featuredMovie->thumbnail }}" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="{{ route('single', ['id' => $featuredMovie->id]) }}">{{ $featuredMovie->name }}</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>{{ $featuredMovie->year }}</p>
                                        <div class="block-stars">
                                            <p>Rating: {{ $featuredMovie->rating }}</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                    @foreach($topViewedMovies as $topViewedMovie)
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="{{ route('single', ['id' => $topViewedMovie->id]) }}" class="hvr-shutter-out-horizontal"><img src="images/thumbnails/{{ $topViewedMovie->thumbnail }}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="{{ route('single', ['id' => $topViewedMovie->id]) }}">{{ $topViewedMovie->name }}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>{{ $topViewedMovie->year }}</p>
                                    <div class="block-stars">
                                        <p>Rating: {{ $topViewedMovie->rating }}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
                    @foreach($topRatedMovies as $topRatedMovie)
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="{{ route('single', ['id' => $topRatedMovie->id]) }}" class="hvr-shutter-out-horizontal"><img src="images/thumbnails/{{ $topRatedMovie->thumbnail }}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="{{ route('single', ['id' => $topRatedMovie->id]) }}">{{ $topRatedMovie->name }}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>{{ $topRatedMovie->year }}</p>
                                    <div class="block-stars">
                                        <p>Rating: {{ $topRatedMovie->rating }}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
                    @foreach($recentlyAddedMovies as $recentlyAddedMovie)
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="{{ route('single', ['id' => $recentlyAddedMovie->id]) }}" class="hvr-shutter-out-horizontal"><img src="images/thumbnails/{{ $recentlyAddedMovie->thumbnail }}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="{{ route('single', ['id' => $recentlyAddedMovie->id]) }}">{{ $recentlyAddedMovie->name }}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>{{ $recentlyAddedMovie->year }}</p>
                                    <div class="block-stars">
                                        <p>Rating: {{ $recentlyAddedMovie->rating }}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>