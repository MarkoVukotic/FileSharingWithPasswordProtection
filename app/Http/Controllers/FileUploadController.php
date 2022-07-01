<?php

namespace App\Http\Controllers;

use App\Models\File;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{

    public function fileUpload(){
        try {
            return view('fileUpload');
        }catch (Exception $exception){
            $exception->getMessage();
        }
    }

    public function shareFile(Request $request){
        try {
            $file = $request->file('file');
            $password = $request->get('password');

           $file_name = $file->storeAs('/files', $file->guessExtension());
            $url = Storage::url($file_name);
            dd($url);  
            
            

            if($password != null && $password != ''){
               $password =  bcrypt($password);
            }

          
            File::create([
                'file_location' => $url,
                'password' => $password,
            ]);

            

        }catch (Exception $exception){
            echo $exception->getMessage();
        }
    }
}
