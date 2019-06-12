<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index() {
        $newestMovies = DB::table('movie')->orderBy('year', 'desc')->take(6)->get();
        $featuredMovies = DB::table('movie')->where('featured', '1')->orderBy('year', 'desc')->take(6)->get();
        $topViewedMovies = DB::table('movie')->orderBy('viewed', 'desc')->take(6)->get();
        $topRatedMovies = DB::table('movie')->orderBy('rating', 'desc')->take(6)->get();
        $recentlyAddedMovies = DB::table('movie')->orderBy('created_at', 'desc')->take(6)->get();
        $links = DB::table('link')->get();

        return view('index', ['links' => $links, 'newestMovies' => $newestMovies, 'featuredMovies' => $featuredMovies, 'topViewedMovies' => $topViewedMovies, 'topRatedMovies' => $topRatedMovies, 'recentlyAddedMovies' => $recentlyAddedMovies]);
    }

    public function show($id) {
        $movie = Movie::find($id);
        $links = DB::table('link')->get();

        return view('single', ['links' => $links, 'movie' => $movie]);
    }

    public function movies() {
        $links = DB::table('link')->get();
        $movies = Movie::get();

        return view('movies', ['links' => $links, 'movies' => $movies]);
    }

    public function search($name = '') {
        $movies = Movie::query()
            ->where('name', 'LIKE', "%{$name}%")
            ->get();

        return $movies;
    }

    public function contact() {
        $links = DB::table('link')->get();

        return view('contact', ['links' => $links]);
    }

    public function about_me() {
        $links = DB::table('link')->get();

        return view('about_me', ['links' => $links]);
    }
}
