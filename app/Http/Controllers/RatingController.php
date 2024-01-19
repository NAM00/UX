<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Rating;
use App\Models\Task;
use Illuminate\Http\Request;
use Hash;

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
        $starRatingInput1 = $request->post("starRatingInput1");
        $starRatingInput2 = $request->post("starRatingInput2");
        $starRatingInput3 = $request->post("starRatingInput3");
        $starRatingInput4 = $request->post("starRatingInput4");
        $starRatingInput5 = $request->post("starRatingInput5");
        $workerID = $request->post("workerId");


        $testWorkerId =Hash::make($workerID);



        if(Rating::where('session_id', $session_id)->first())
        {
            $data = Rating::where('session_id', $session_id)->first();
            $data->rating1 = $starRatingInput1;
            $data->rating2 = $starRatingInput2;
            $data->rating3 = $starRatingInput3;
            $data->rating4 = $starRatingInput4;
            $data->rating5 = $starRatingInput5;
            $data->update();        }
        else
        {
            $data = new Rating();
            $data->rating1 = $starRatingInput1;
            $data->rating2 = $starRatingInput2;
            $data->rating3 = $starRatingInput3;
            $data->rating4 = $starRatingInput4;
            $data->rating5 = $starRatingInput5;
            $data->session_id = $session_id;
            $data->save();
        }

        if(!(Payment::where('session_id', $session_id)->first()))
        {
            $data = new Payment();
            $data->payment_code = $testWorkerId;
            $data->session_id = $session_id;
            $data->save();
        }





        return view('payment', ['testWorkerId' => $testWorkerId]);
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
