<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

trait ImageUpload
{
    public function uploadLocal(UploadedFile $uploadedFile, $oldfile = null, $folder = null, $disk = 'public')
    {
        $name = Str::random(25);
        $ext = strtolower($uploadedFile->getClientOriginalExtension());
        $fileName = $name.'.'.$ext;
       
        if (!is_null($oldfile)) {
            Storage::delete($disk.'/'.$folder.'/'.$oldfile);
        }
        $uploadedFile->storeAs($folder, $fileName, $disk);
        
        return $fileName;
    }
    // public function uploadLocalWithRsize(UploadedFile $uploadedFile, $oldfile = null, $folder = null, $disk = 'public')
    // {
    //     $name = Str::random(25);
    //     $ext = strtolower($uploadedFile->getClientOriginalExtension());
    //     $fileName = $name.'.'.$ext;
    //     $thumbfileName= 'thumb_'.$fileName;
    //     Image::make($uploadedFile->getRealPath())->resize(100, 100)->save('app/'.$disk.'/'.$folder.'/'.$thumbfileName);

    //     if (!is_null($oldfile)) {
    //         Storage::delete($disk.'/'.$folder.'/'.$oldfile);
    //     }
    //     $uploadedFile->storeAs($folder, $fileName, $disk);
        
    //     return $fileName;
    // }
}