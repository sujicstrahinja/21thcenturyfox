@extends('layouts.frontend_layout')

@section('head_section')
    <link href="{{ asset('css/news.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/list.css') }}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/table-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/basictable.css') }}" />
    <script type="text/javascript" src="{{ asset('js/jquery.basictable.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').basictable();

            $('#table-breakpoint').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint1').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint2').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint3').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint4').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint5').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint6').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint7').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint8').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint9').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint10').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint11').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint12').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint13').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint14').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint15').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint16').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint17').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint18').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint19').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint20').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint21').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint22').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint23').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint24').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint25').basictable({
                breakpoint: 768
            });
            $('#table-breakpoint26').basictable({
                breakpoint: 768
            });
        });
    </script>
@endsection

@section('content')
    <!-- faq-banner -->
    <div class="faq">
        <h4 class="latest-text w3_faq_latest_text w3_latest_text">Movies List</h4>
        <div class="container">
            <div class="agileits-news-top">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">List</li>
                </ol>
            </div>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <div class="w3_search" style="width:100%; margin-left: 0px;">
                            <form action="#" method="post">
                                <input type="text" id="search" name="Search" placeholder="Search" required="" style="width: 100%; border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                            </form>
                        </div>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="agile-news-table">
                        <div class="w3ls-news-result">
                            <h4>Search Results : <span id="moviesSearchResultCount">{{ count($movies) }}</span></h4>
                        </div>
                        <table id="table-breakpoint">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Movie Name</th>
                                <th>Year</th>
                                <th>Viewed</th>
                                <th>Rating</th>
                            </tr>
                            </thead>
                            <tbody id="table_content">
                            @foreach($movies as $movie)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td class="w3-list-img"><a href="{{ route('single', ['id' => $movie->id]) }}"><img src="images/thumbnails/{{ $movie->thumbnail }}" alt="" /> <span>{{ $movie->name }}</span></a></td>
                                    <td>{{ $movie->year }}</td>
                                    <td>{{ $movie->viewed }}</td>
                                    <td>{{ $movie->rating }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- faq-banner end -->

    <script>
        $(document).ready(function() {
            $("#search").keyup(function() {
                $.ajax({
                    type: "GET",
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    url: 'search/'+this.value,
                    success: function(data) {
                        let output = '';
                        for(let i = 0; i < data.length; i++) {
                            output += "<tr>";
                                output += `<td>${i+1}</td>`;
                                output += `<td class="w3-list-img"><a href="single/${data[i].id}"><img src="images/thumbnails/${data[i].thumbnail}" alt=""><span>${data[i].name}</span></a></td>`;
                                output += `<td>${data[i].year}</td>`;
                                output += `<td>${data[i].viewed}</td>`;
                                output += `<td>${data[i].rating}</td>`;
                            output += "</tr>";
                        };
                        $("#table_content").html(output);
                        $("#moviesSearchResultCount").html(data.length);
                    }
                })
            })
        })
    </script>
@endsection

