<?php

namespace MJ\FileUpload\Facades;

use Illuminate\Support\Facades\Facade;

class FileUpload extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fileupload';
    }
}
