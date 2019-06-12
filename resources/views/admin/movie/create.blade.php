<style>
    .half-width { width: 49.8%; display: inline-block;}
    .mb-1 { margin-bottom: 2em;}
    .fr { float: right;}
</style>

@extends('layouts.admin_layout')

@section('header')
    Create a Movie
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    @include('includes.form_errors')
                    <form method="post" action="{{ route('movie.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nameInputField">Name</label>
                                <input type="input" class="form-control" id="nameInputField" placeholder="Enter name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="descriptionTextArea">Description</label>
                                <textarea class="form-control" id="descriptionTextArea" rows="4" placeholder="Enter description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="headlineTextArea">Headline</label>
                                <textarea class="form-control" id="headlineTextArea" rows="2" placeholder="Enter headline" name="headline"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="youtubeLinkInputField">Youtube Link</label>
                                <input type="input" class="form-control" id="youtubeLinkInputField" placeholder="Enter Youtube link (dLmKio67pVQ)" name="youtube_link">
                            </div>
                            <div class="form-group half-width" >
                                <label for="yearInputField">Year</label>
                                <input type="number" class="form-control" id="yearInputField" placeholder="Enter year" min="1900" name="year">
                            </div>
                            <div class="form-group half-width">
                                <label for="ratingInputField">Rating</label>
                                <input type="input" class="form-control" id="ratingInputField" placeholder="Enter rating" name="rating">
                            </div>
                            <div class="form-group half-width">
                                <label for="featuredRadios">Featured</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="featured" id="featuredRadiosYes" value="1">
                                        Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="featured" id="featuredRadiosNo" value="0" checked>
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group half-width">
                                <label for="viewedInputField">Viewed</label>
                                <input type="number" class="form-control" id="viewedInputField" placeholder="Enter number viewed" name="viewed">
                            </div>
                            <div class="form-group half-width">
                                <label for="viewedInputField">Genres</label>
                                @foreach($genres as $genre)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="genres[]" value="{{$genre->id}}">
                                            {{ $genre->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group half-width fr">
                                <div class="mb-1">
                                    <label for="imageInputFile">Image input</label>
                                    <input type="file" id="imageInputFile" name="image">

                                    <p class="help-block">Insert image here.</p>
                                </div>
                                <div>
                                    <label for="thumbnailInputFile">Thumbnail input</label>
                                    <input type="file" id="thumbnailInputFile" name="thumbnail">

                                    <p class="help-block">Insert thumbnail here.</p>
                                </div>
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