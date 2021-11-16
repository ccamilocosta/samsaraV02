<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function upload(Request $request)
    {
        if($request->hasFile('image')){
            $filename = $request->profile_image->getClientOriginalName();
            $request->profile_image->storeAs('profile_images',$filename,'public');
            Auth()->user()->update(['profile_image'=>$filename]);
        }
        return redirect()->back();
    }
}
