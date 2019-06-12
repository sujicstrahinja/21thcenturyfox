@extends('layouts.admin_layout')

@section('header')
    Links
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
                    @if(count($links))
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Href</th>
                            <th>Created Date</th>
                            <th>Last Updated</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($links as $link)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$link->name}}</td>
                                <td>{{$link->href}}</td>
                                <td>{{$link->created_at}}</td>
                                <td>{{$link->updated_at}}</td>
                                <td><a href="{{ route('link.edit',$link)}}"><button class="btn btn-primary">Edit</button></a></td>
                                <td>
                                    <form action="{{ route('link.destroy', $link)}}" method="post">
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
                        <h2>There are no links.</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a name="" id="" class="btn btn-primary" href="{{ route('link.create') }}" role="button">Add</a>
            </div>
        </div>
    </section>
@endsection