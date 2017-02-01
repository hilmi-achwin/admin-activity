<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Activity;
use App\Perusahaan;
use Session;
use Input;
use Validator;
use Response;
use PDF;
use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;


class ActivityController extends Controller
{   
    protected $mailer;

     public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }   

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
        
        $perusahaan = Perusahaan::where('nama_perusahaan','1')->first();
        $data = [
            'page' => 'activity',
            'activity' => $activity,
            'perusahaan' => $perusahaan
        ];
        return view('activity.process',$data);
    }

    public function postProcess(Request $request)
    {
        $pdf = PDF::loadView('pdf');
        return $pdf->inline('invoice.pdf');
        // $message = sprintf('Klik link berikut untuk aktivasi akun Hai Unair anda ');

        // $this->mailer->raw($message, function (Message $m) {
        //     $m->to('hilmiweq321@gmail.com')->subject('Aktivasi akun Hai Unair');
        //     $m->attach(public_path().'/Hasil Online BOF ITS.xlsx');
        // });
    }

   

}
