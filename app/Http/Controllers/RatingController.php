<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Task;
use Illuminate\Http\Request;

class RatingController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store_review(Request $request)
    {
        $session_id = session()->getId();
        $starRating1 = $request->post("starRating1");
        $starRating2 = $request->post("starRating2");
        $starRating3 = $request->post("starRating3");
        $starRating4 = $request->post("starRating4");
        $starRating5 = $request->post("starRating5");

        if($request->post("subTask13") !== null)
        {
            $subTask13 = $request->post("subTask13");
        }
        else
        {
            $subTask13 = null;
        }


        if(Rating::where('session_id', $session_id)->first())
        {
            $data = Rating::where('session_id', $session_id)->first();
            $data->rating1 = $starRating1;
            $data->rating2 = $starRating2;
            $data->rating3 = $starRating3;
            $data->rating4 = $starRating4;
            $data->rating5 = $starRating5;
            $data->update();        }
        else
        {
            $data = new Rating();
            $data->rating1 = $starRating1;
            $data->rating2 = $starRating2;
            $data->rating3 = $starRating3;
            $data->rating4 = $starRating4;
            $data->rating5 = $starRating5;
            $data->session_id = $session_id;
            $data->save();        }

        return view('payment');
    }


    public function show(Rating $rating)
    {
        //
    }


    public function edit(Rating $rating)
    {
        //
    }


    public function update(Request $request, Rating $rating)
    {
        //
    }


    public function destroy(Rating $rating)
    {
        //
    }
}
