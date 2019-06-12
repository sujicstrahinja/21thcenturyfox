<?php

namespace App\Http\Controllers\admin;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use phpDocumentor\Reflection\Types\String_;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::get();
        return view('admin.movie.display', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::get();

        return view('admin.movie.create', ['genres' => $genres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'headline' => 'required',
            'youtube_link' => 'required',
            'year' => 'nullable|numeric',
            'rating' => 'numeric',
            'featured' => 'required',
            'genres' => 'required',
            'viewed' => 'nullable|numeric',
            'image' => 'required|image',
            'thumbnail' => 'required|image'
        ]);

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path().'/images/', $imageName);

        $thumbnail = $request->file('thumbnail');
        $thumbnailName = $thumbnail->getClientOriginalName();
        $thumbnail->move(public_path().'/images/thumbnails/', $thumbnailName);

        $movie = new Movie([
            'name' => $request-> get('name'),
            'description' => $request->get('description'),
            'headline' => $request->get('headline'),
            'youtube_link' => $request->get('youtube_link'),
            'year' => $request->get('year'),
            'rating' => $request->get('rating'),
            'featured' => $request->get('featured'),
            'viewed' => $request->get('viewed'),
            'image' => $imageName,
            'thumbnail' => $thumbnailName
        ]);
        $movie->save();

        $genres = Genre::find($request->get('genres'));
        $movie->genres()->attach($genres);

        return redirect('/admin/movie')->with('success', 'Movie has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $movie = Movie::find($movie->id);
        $genres = Genre::get();

        return view('admin.movie.edit', ['movie' => $movie, 'genres' => $genres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'headline' => 'required',
            'youtube_link' => 'required',
            'year' => 'nullable|numeric',
            'rating' => 'nullable|numeric',
            'featured' => 'required',
            'genres' => 'required',
            'viewed' => 'nullable|numeric'
        ]);

        $movie = Movie::find($movie->id);

        $image = UploadedFile::class;
        $imageName = String_::class;
        if($request->file('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            ($movie->image === $imageName) ? '' : $image->move(public_path().'/images/', $imageName);
            $movie->image = $imageName;
        }

        $thumbnail = UploadedFile::class;
        $thumbnailName = String_::class;
        if($request->file('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = $image->getClientOriginalName();
            ($movie->thumbnail === $thumbnailName) ? '' : $thumbnail->move(public_path().'/images/thumbnails', $thumbnailName);
            $movie->thumbnail = $thumbnailName;
        }

        $movie->name = $request->get('name');
        $movie->description = $request->get('description');
        $movie->headline = $request->get('headline');
        $movie->youtube_link = $request->get('youtube_link');
        $movie->year = $request->get('year');
        $movie->rating = $request->get('rating');
        $movie->featured = $request->get('featured');
        $movie->viewed = $request->get('viewed');
        $movie->save();

        $genres = Genre::find($request->get('genres'));
        $movie->genres()->sync($genres);

        return redirect('admin/movie')->with('success', 'Movie has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie = Movie::find($movie->id);
        $genres = Genre::all();
        $movie->genres()->detach($genres);
        $movie->delete();

        return redirect('admin/movie')->with('success', 'Movie has been deleted');
    }
}
