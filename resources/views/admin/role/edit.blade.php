@extends('layouts.admin_layout')

@section('header')
    Edit Role with id <b> {{ $role->id }} </b>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form method="post" action="{{ route('role.update', $role->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputField">Name</label>
                                <input type="input" value={{ $role->name }} class="form-control" id="exampleInputField" placeholder="Enter name" name="name">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="button" type="submit" class="btn btn-primary">Update</button>
                            <a href="{{url()->previous()}}"><button type="button" class="btn btn-default">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection