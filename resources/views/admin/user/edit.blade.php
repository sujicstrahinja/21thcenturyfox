@extends('layouts.admin_layout')

@section('header')
    Edit a User with id <b>{{ $user->id }}</b>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    @include('includes.form_errors')
                    <form method="post" action="{{ route('user.update', $user) }}">
                        @csrf
                        @method('PATCH')
                        <div class="box-body">
                            <div class="form-group half-width">
                                <label for="nameInputField">Name</label>
                                <input type="input" value="{{ $user->name }}" class="form-control" id="nameInputField" placeholder="Enter name" name="name">
                            </div>
                            <div class="form-group half-width">
                                <label for="emailInputField">Email</label>
                                <input type="email" value="{{ $user->email }}" class="form-control" id="emailInputField" placeholder="Enter email" name="email">
                            </div>
                            {{--<div class="form-group half-width">--}}
                                {{--<label for="passwordInputField">Password</label>--}}
                                {{--<input type="input" value="{{ $user->password }}" class="form-control" id="passwordInputField" placeholder="Enter password" name="password">--}}
                            {{--</div>--}}
                            <div class="form-group half-width">
                                <label>Select role</label>
                                <select class="form-control" name="role_id">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ ( $role->id == $user->role_id) ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="button" type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ url()->previous() }}"><button type="button" class="btn btn-default">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection