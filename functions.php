<?php
function user() {
    if (isset($_SESSION["user"])) {
        return $_SESSION["user"];
    } else {
        return false;
    }
}

function is_admin() {
    if (user() && user()->id == "admin") {
        return true;
    } else {
        return false;
    }
}