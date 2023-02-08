<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $url =
            'https://api.themoviedb.org/3/movie/now_playing?api_key=2e856250c0594b8135bd2d581713f693';

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'verify' => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return view('index', ['responseBody' => $responseBody->results]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nowPlaying()
    {
        $client = new Client();
        $url =
            'https://api.themoviedb.org/3/movie/now_playing?api_key=2e856250c0594b8135bd2d581713f693';

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'verify' => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return view('now-playing', ['responseBody' => $responseBody->results]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function popular()
    {
        $client = new Client();
        $url =
            'https://api.themoviedb.org/3/movie/popular?api_key=2e856250c0594b8135bd2d581713f693';

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'verify' => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return view('popular', ['responseBody' => $responseBody->results]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function topRated()
    {
        $client = new Client();
        $url =
            'https://api.themoviedb.org/3/movie/top_rated?api_key=2e856250c0594b8135bd2d581713f693';

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'verify' => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return view('top-rated', ['responseBody' => $responseBody->results]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upcoming()
    {
        $client = new Client();
        $url =
            'https://api.themoviedb.org/3/movie/upcoming?api_key=2e856250c0594b8135bd2d581713f693';

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'verify' => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return view('upcoming', ['responseBody' => $responseBody->results]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
