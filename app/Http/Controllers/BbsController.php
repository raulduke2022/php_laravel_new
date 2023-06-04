<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;


class BbsController extends Controller
{
    public function index() {
//        $bbs = Bb::latest()->get();
//        $s = "Объявления\r\n\r\n";
//        foreach ($bbs as $bb){
//            $s .= $bb->title . "\r\n";
//            $s .= $bb->price . " руб.\r\n";
//            $s .= "\r\n";
//        }
//        return response($s)->header('Content-Type', 'text/plain');
        $context = ['bbs' => Bb::latest()->get()];
        return view('index', $context);
    }

    public function detail(Bb $bb) {
////        $bb = Bb::find($bb);
////        if ($bb == Null) {
////            return response('Not found')->header('Content-Type', 'text/plain');
////        }
//        $s = $bb->title . "\r\n\r\n";
//        $s .= $bb->content . "\r\n";
//        $s .= $bb->price . "\r\n";
//        return response($s)->header('Content-Type', 'text/plain');
        $context = ['bb' => $bb];
        return view('detail', ['bb' => $bb]);
    }
}
