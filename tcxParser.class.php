<?php

class tcxParser
{

    protected $xml;
    protected $tcxArr = array();

    public function __construct() {
    }

    public function loadFile($file) {

        if(file_exists($file) && $this->hasTcxExt($file)) {

            $this->xml = simplexml_load_file($file);

            if($this->xml) {
                return true;
            } else {
                return false;
            }

        }

    }

    public function getXml() {
        return $this->xml;
    }

    protected function hasTcxExt($file) {
        return preg_match('/\.tcx$/', $file);
    }

}