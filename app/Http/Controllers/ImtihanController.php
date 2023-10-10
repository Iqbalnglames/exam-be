<?php

namespace App\Http\Controllers;

use App\Models\Imtihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImtihanController extends Controller
{
    public function inputJawaban (Request $request) 
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',            
            'jawaban' => 'required',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'succes' => false,
                'message' => 'lengkapi dulu semua jawabannya'
            ]);
        }
        $jawaban = Imtihan::create([
            'nama' => $request->nama,
            'jawaban' => $request->jawaban,
            
        ]);
        return response()->json([
            'succes' => true,
            'message' => 'jawaban berhasil dikirim!!',
            'data' => $jawaban,
        ]);
    }
    public function Result ()
    {
        $examsData = Imtihan::all();
        return response()->json([
            'success' => true,
            'data' => $examsData,
        ]);
    }
}
