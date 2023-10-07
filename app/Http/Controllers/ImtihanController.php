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
            'satu' => 'required',
            'dua' => 'required',
            'tiga' => 'required',
            'empat' => 'required',
            'lima' => 'required',
            'enam' => 'required',
            'tujuh' => 'required',
            'delapan' => 'required',
            'sembilan' => 'required',
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
            'satu' => $request->satu,
            'dua' => $request->dua,
            'tiga' => $request->tiga,
            'empat' => $request->empat,
            'lima' => $request->lima,
            'enam' => $request->enam,
            'tujuh' => $request->tujuh,
            'delapan' => $request->delapan,
            'sembilan' => $request->sembilan,
        ]);
        return response()->json([
            'succes' => true,
            'message' => 'jawaban berhasil dikirim!!',
            'data' => $jawaban,
        ]);
    }
}
