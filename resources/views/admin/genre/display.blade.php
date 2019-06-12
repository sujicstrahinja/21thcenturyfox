@extends('layouts.admin_layout')

@section('header')
    Genres
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br />
                    @endif
                    @if(count($genres))
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created Date</th>
                                <th>Last Updated</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($genres as $genre)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$genre->name}}</td>
                                    <td>{{$genre->created_at}}</td>
                                    <td>{{$genre->updated_at}}</td>
                                    <td><a href="{{ route('genre.edit',$genre)}}"><button class="btn btn-primary">Edit</button></a></td>
                                    <td>
                                        <form action="{{ route('genre.destroy', $genre)}}" method="post">
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
                        <h2>There are no genres.</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a name="" id="" class="btn btn-primary" href="{{ route('genre.create') }}" role="button">Add</a>
            </div>
        </div>
    </section>
@endsection