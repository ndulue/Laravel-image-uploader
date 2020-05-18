<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploaderController extends Controller
{
    public function uploader(Request $request){
        if (count($request->images) > 0) {
            foreach ($request->images as $image) {
                $image->store('images');
            }
        }

        return response()->json([
            "Message" => "Done"
        ]);
    }
}
