<?php

namespace MJ\FileUpload;

use Illuminate\Support\Facades\File;

class FileUploadService
{
    public function upload($newFile, $path, $oldFileName = null)
    {
        $publicPath = public_path($path);

        if (!file_exists($publicPath)) {
            mkdir($publicPath, 0777, true);
        }

        if ($oldFileName && file_exists(public_path($oldFileName))) {
            unlink(public_path($oldFileName));
        }

        $fileName = $newFile->getClientOriginalName();

        if (file_exists($publicPath . '/' . $fileName)) {
            $fileName = rand(0, 99) . '_' . $fileName;
        }

        $newFile->move($publicPath, $fileName);

        return $path . '/' . $fileName;
    }
}
