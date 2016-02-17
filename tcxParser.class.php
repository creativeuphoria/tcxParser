<?php

class tcxParser
{

    public function loadTCXFile($file) {

        if(file_exists($file)) {

            $data = simplexml_load_file($file);

            return $data;

        }

    }

}