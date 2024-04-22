<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulator4controller extends Controller
{
    public function index(){
        return view('kalkulator4.index');
    }
    public function home(){
        return view('home');
    }

    public function input(Request $rq){
        $a = $rq -> angka1;
        $b = $rq -> angka2;
        $opr = $rq ->operator;
        $hasil = $rq -> hasil;

        if($opr == "angka1"){
            $hasil = $a+$b;
        }
        elseif($opr == "kurang"){
            $hasil = $a-$b;
        }
        elseif($opr == "kali"){
            $hasil = $a*$b;
        }
        elseif($opr == "bagi"){
            if($a == 0){
                $hasil = "pembagian nol tidak diizinkan";
            }
            elseif($b == 0)
            {
                $hasil = "pembagian nol tidak diizinkan";
            }
            else{
                $hasil = $a/$b;
            }
        }
        else{
            $hasil = "";
            return view('kalkulator4.index', compact('hasil'));
        }

        return view('kalkulator4.hasil', compact('hasil'));

    }
    public function javascript (){
        return view("kalkulator4.kalkulatorjs");
    }
}

