<?php 

namespace App\Contracts;

interface StorageServiceCaller
{
    public function upload();

    public function download();

    public function putFile();

    public function deleteFile();

    public function deleteFolder();
}