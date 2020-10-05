<?php

namespace App\Http\Controllers\Frontend;


use App\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HistoryController extends Controller
{
   //return to history view on frontend dashboard
    public function index()
    {

        return view('frontend/history/index') ;

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(History $history)
    {
        //
    }


    public function edit(History $history)
    {
        //
    }


    public function update(Request $request, History $history)
    {
        //
    }


    public function destroy(History $history)
    {
        //
    }
}
