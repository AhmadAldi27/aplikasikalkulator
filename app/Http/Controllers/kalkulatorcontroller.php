<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator.index');
    }
    
    public function store(Request $request)
    {
        $angka1=$request->angka1;
        $angka2=$request->angka2;
        $operator = $request->operator;

        if ($operator == "tambah"){
            $hasil=$angka1+$angka2;
        }
        elseif ($operator == "kurang"){
            $hasil=$angka1-$angka2;
        }
        elseif ($operator== 'kali'){
            $hasil = $angka1 * $angka2;
        }
        elseif($operator == 'bagi'){
            if($angka2 !=0){
                $hasil =$angka1/$angka2;
                
            }
            else{
                $hasil = 'pembagian nol tidak di izinkan';
            }
        }
        else{
            return redirect()->route('kalkulator');
        }



        return view('kalkulator.hasil', compact('hasil'));
    }

    public function manual()
    {
        return view('kalkulatorhtml.kalkulator');
    }
}
