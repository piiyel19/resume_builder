<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require "vendor/autoload.php";
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

class Frame extends Controller
{
    //
    public function index(){
        return view('example');
    }


    public function tips(){
        return view('tips');
    }

    public function tips_details(){
        return view('tips-details');
    }


    public function form($id){
        return view('example-form');
    }

    public function profile(){
        return view('profile-form');
    }

    public function work(){
        return view('work-form');
    }


    public function education(){
        return view('education-form');
    }


    public function skill(){
        return view('skill-form');
    }

    public function notification(){
        return view('notification');
    }

    public function notification_details($id){
        return view('notification-details');
    }

    public function cv(){
        return view('cv-form');
    }
    

    public function download_cv()
    {
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        //$options->set('isHtml5ParserEnabled', true);
        $options->set('debugLayout', false);
        //$options->set('debugPng', true);
        $options->set('enable_php', false);


        $dompdf = new Dompdf($options);

        $html = view('download_cv');

        //return $html;
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'landscape');
        // $dompdf->setPaper('A4', 'portrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $rand = rand();

        $label = 'CV_';

        $rand = date('Ymd');
        $dompdf->stream($label.'_'.$rand.'.pdf');

        exit();
    }


    public function download_resume()
    {
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        //$options->set('isHtml5ParserEnabled', true);
        $options->set('debugLayout', false);
        //$options->set('debugPng', true);
        $options->set('enable_php', false);


        $dompdf = new Dompdf($options);

        $html = view('download_cv');

        //return $html;
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'landscape');
        // $dompdf->setPaper('A4', 'portrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $rand = rand();

        $label = 'Resume_';

        $rand = date('Ymd');
        $dompdf->stream($label.'_'.$rand.'.pdf');

        exit();
    }
    
    
}
