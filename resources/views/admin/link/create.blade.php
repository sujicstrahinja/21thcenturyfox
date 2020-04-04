@extends('layouts.admin_layout')

@section('header')
    Add Link
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
                    <form method="post" action="{{ route('link.store') }}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nameInputField">Name</label>
                                <input type="input" class="form-control" id="nameInputField" placeholder="Enter name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="hrefInputField">Href</label>
                                <input type="input" class="form-control" id="hrefInputField" placeholder="Enter href" name="href">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="button" type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url()->previous()}}"><button type="button" class="btn btn-default">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection