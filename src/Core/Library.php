<?php
class Library {
    public function msg_go($msg, $location) {
        echo "<script>alert('$msg'); location.href='$location';<script>";
    }

    public function msg_back($msg) {
        echo "<script>alert('$msg'); history.back();<script>";
    }

    public function json($data) {
        header("Content-type: application/json");
        echo "<pre>" . json_encode($data) . "</pre>";
    }
}