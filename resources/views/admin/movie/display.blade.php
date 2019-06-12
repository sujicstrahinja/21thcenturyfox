<style>
    .mini-picture {
        width: 150px;
        height: 100px;
    }
</style>

@extends('layouts.admin_layout')

@section('header')
    Movies
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br />
                    @endif
                    @if(count($movies))
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Headline</th>
                                <th>Youtube Link</th>
                                <th>Year</th>
                                <th>Rating</th>
                                <th>Featured</th>
                                <th>Viewed</th>
                                <th>Create Date</th>
                                <th>Last Updated</th>
                                <th>Genres</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($movies as $movie)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$movie->name}}</td>
                                    <td>{{ Str::limit($movie->description, 150) }}</td>
                                    <td>{{ Str::limit($movie->headline, 150) }}</td>
                                    <td>{{$movie->youtube_link}}</td>
                                    <td>{{$movie->year}}</td>
                                    <td>{{$movie->rating}}</td>
                                    <td>
                                        @if($movie->featured == 1)
                                            Yes
                                        @elseif($movie->featured == 0)
                                            No
                                        @endif
                                    </td>
                                    <td>{{$movie->viewed}}</td>
                                    <td>{{$movie->created_at}}</td>
                                    <td>{{$movie->updated_at}}</td>
                                    <td>
                                        @foreach($movie->genres as $genre)
                                            {{ $genre->name }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <img src="{{ asset('images/' . $movie->image) }}" alt="" class="mini-picture">
                                    </td>
                                    <td><a href="{{ route('movie.edit', $movie)}}"><button class="btn btn-primary">Edit</button></a></td>
                                    <td>
                                        <form action="{{ route('movie.destroy', $movie)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>There are no movies.</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a name="" id="" class="btn btn-primary" href="{{ route('movie.create') }}" role="button">Add</a>
            </div>
        </div>
    </section>
@endsection