<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Activity;
use Session;
use Input;
use Validator;
use Response;


class ActivityController extends Controller
{

    public function index($status)
    {   
        $status = studly_case($status);
        $activities = Activity::where('status',$status)->get();
        $data = [
            'page' => 'activity',
            'activities' => $activities
        ];
        return view('activity.index',$data);
    }

    public function process($id)
    {
        $activity = Activity::find($id);
        $data = [
            'page' => 'activity',
            'activity' => $activity
        ];
        return view('activity.process',$data);
    }

    public function postProcess(Request $request)
    {
        dd($request->input);
    }

   

}
