<?php

namespace MJ\FileUpload;

use Illuminate\Support\ServiceProvider;

class FileUploadServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('fileupload', function () {
            return new FileUploadService();
        });
    }

    public function boot()
    {
        //
    }
}
