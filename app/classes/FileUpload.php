<?php


namespace App\classes;


class FileUpload
{
    protected $file;
    protected $directory;
    protected $name;
    protected $imageName;
    protected $tempPath;

    public function index()
    {
        header('Location: action.php?pages=FileUpload');
    }

    public function __construct($data=null, $file=null)
    {
        $this->file = $file;
        $this->imageName = $file['image']['name'];
        $this->tempPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/product-image/'.$this->imageName;
    }

    public function newImage()
    {
        move_uploaded_file($this->tempPath, $this->directory);
    }
}