<?php
class Wacky extends Application 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function plane($id)
    {
        echo file_get_contents(WACKY . 'airplanes/'.$id);
    }
}
