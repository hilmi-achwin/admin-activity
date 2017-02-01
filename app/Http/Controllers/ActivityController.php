<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Activity;
use App\Perusahaan;
use App\Precheck;
use App\Postcheck;
use Auth;
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
        $activity = Activity::where('id',$id)->first();
        
        $perusahaan = Perusahaan::where('nama_perusahaan',$activity->nama_perusahaan)->first();
        $data = [
            'page' => 'activity',
            'activity' => $activity,
            'perusahaan' => $perusahaan
        ];
        return view('activity.process',$data);
    }

    public function postProcess(Request $request)
    {

        // $pdf = PDF::loadView('pdf');
        // return $pdf->inline('invoice.pdf');
       
        
        // $modul_terpasang = implode(',', $request['modul_terpasang']);
        // $precheckInput = Precheck::create([
        //     'id_activity' => $request->input('id_activity'),
        //     'fisik' => $request->input('fisik'),
        //     'os' => $request->input('os'),
        //     'modul_terpasang' => $request->input('modul_terpasang'),
        //     'modem' => $request->input('modem'),
        //     'accessories' => $request->input('accessories'),
        //     'num_dial_iplus' => $request->input('num_dial_iplus'),
        //     'ip_extreme' => $request->input('ip_extreme'),
        //     'directory_modul' => $request->input('directory_modul'),
        //     'lain-lain' => $request->input('lain-lain'),
        //     'modul_terpasang' => $modul_terpasang
        //     ]);


        // $postcheckInput = Postcheck::create([
        //     'id_activity' => $request->input('id_activity'),
        //     'pengembalian_fungsi_awal' => $request->input('pengembalian_fungsi_awal'),
        //     'fungsi_model_edii' => $request->input('fungsi_model_edii'),
        //     'fungsi_pembentukan_edifact' => $request->input('fungsi_pembentukan_edifact'),
        //     'fungsi_komunikasi' => $request->input('fungsi_komunikasi'),
        //     'penyelesaian_semua_keluhan' => $request->input('penyelesaian_semua_keluhan'),
        //     'serah_terima' => $request->input('serah_terima'),
        //     'lain-lain' => $request->input('lain-lain'),
        //     ]);

        // $jenis_perusahaan = implode(',', $request['jenis_perusahaan']);
        //   $perusahaan = Perusahaan::where('nama_perusahaan',$request->input('nama_perusahaan'))->
        //     update([
        //     'nama_perusahaan'   => $request->input('nama_perusahaan'),
        //     'alamat'            => $request->input('alamat'),
        //     'fax'               => $request->input('fax'),
        //     'nomor_telepon'        => $request->input('nomor_telepon'),
        //     'no_hp'             => $request->input('no_hp'),
        //     'email'             => $request->input('email'),
        //     'kontak_person'     => $request->input('kontak_person'),
        //     'npwp'              => $request->input('npwp'),
        //     'edi_number'        => $request->input('edi_number'),
        //     'enabler'           => $request->input('enabler'),
        //     'jenis_perusahaan'  => $jenis_perusahaan
        //     ]);

        // $activityUpdate = Activity::where('id', $request->input('id_activity'))->update([
        //     'tindakan_perbaikan' => $request->input('tindakan_perbaikan'),
        //     'nama_admin' => Auth::User()->id,
        //     'status' => 'Sudah'
        //     ]);
    
        

        $message = sprintf('Klik link berikut untuk aktivasi akun Hai Unair anda ');

        $this->mailer->raw($message, function (Message $m) {
            $m->to('hilmiweq321@gmail.com')->subject('Aktivasi akun Hai Unair');
            $m->attach(public_path().'/Hasil Online BOF ITS.xlsx');
        });
    }

   

}
