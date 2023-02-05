<?php

/*
    инкапсуляция
*/

class Images{
    public function upload($file) {
        if ($this->check($file['name'])) {
            $this->resize($file);
            $this->watermark($file);
        }
    }

    public function get($id, $size) {

    }

    private function resize($file) {

    }

    private function check($file) {

    }

    private function watermark($file) {

    }
}

?>