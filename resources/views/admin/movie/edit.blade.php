<style>
    .half-width { width: 49.8%; display: inline-block;}
    .mini-picture {
        width: 236px;
        height: 182px;
    }
    .mini-thumbnail {
        width: 120px;
        height: 180px;
    }
    .mb-1 { margin-bottom: 2em;}
    .fr { float: right; }
</style>

@extends('layouts.admin_layout')

@section('header')
    Edit Movie with id <b>{{ $movie->id }}</b>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    @include('includes.form_errors')
                    <form method="post" action="{{ route('movie.update', $movie) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nameInputField">Name</label>
                                <input type="input" value="{{ $movie->name }}" class="form-control" id="nameInputField" placeholder="Enter name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="descriptionTextArea">Description</label>
                                <textarea class="form-control" id="descriptionTextArea" rows="4" placeholder="Enter description" name="description">{{ $movie->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="headlineTextArea">Headline</label>
                                <textarea class="form-control" id="headlineTextArea" rows="2" placeholder="Enter headline" name="headline">{{ $movie->headline }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="youtubeLinkInputField">Youtube Link</label>
                                <input type="input" value="{{ $movie->youtube_link }}" class="form-control" id="youtubeLinkInputField" placeholder="Enter Youtube link (dLmKio67pVQ)" name="youtube_link">
                            </div>
                            <div class="form-group half-width" >
                                <label for="yearInputField">Year</label>
                                <input type="number" value="{{ $movie->year }}" class="form-control" id="yearInputField" placeholder="Enter year" min="1900" name="year">
                            </div>
                            <div class="form-group half-width">
                                <label for="ratingInputField">Rating</label>
                                <input type="input" value="{{ $movie->rating }}" class="form-control" id="ratingInputField" placeholder="Enter rating" name="rating">
                            </div>
                            <div class="form-group half-width">
                                <label for="featuredRadios">Featured</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="featured" id="featuredRadiosYes" value="1" {{ ($movie->featured == 1) ? ' checked' : '' }}>
                                        Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="featured" id="featuredRadiosNo" value="0" {{ ($movie->featured == 0) ? ' checked' : '' }}>
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group half-width">
                                <label for="viewedInputField">Viewed</label>
                                <input type="number" value="{{ $movie->viewed }}" class="form-control" id="viewedInputField" placeholder="Enter number viewed" name="viewed">
                            </div>
                            <div class="form-group half-width">
                                <label for="viewedInputField">Genres</label>
                                @foreach($genres as $genre)
                                    <div class="checkbox">
                                        {{--{{dd($movie->genres)}}--}}
                                        <label>
                                            <input type="checkbox" name="genres[]" value="{{$genre->id}}" {{ ($movie->genres->contains($genre)) ? ' checked' : '' }}>
                                            {{ $genre->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group half-width fr">
                                <div class="mb-1">
                                    <label for="imageInputFile">Image input</label>
                                    <input type="file" id="imageInputFile" name="image">

                                    <p class="help-block">Current Image is {{ $movie->image }}</p>
                                    <img src="{{ asset('images/' . $movie->image) }}" alt="" class="mini-picture">
                                </div>
                                <div>
                                    <label for="thumbnailInputFile">Thumbnail input</label>
                                    <input type="file" id="thumbnailInputFile" name="thumbnail">

                                    <p class="help-block">Current Thumbnail is {{ $movie->thumbnail }}</p>
                                    <img src="{{ asset('images/' . $movie->thumbnail) }}" alt="" class="mini-thumbnail">
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