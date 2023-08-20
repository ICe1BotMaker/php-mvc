<?php
require_once "./autoload.php";

$dir = "./pages/";

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file == "." || $file == "..") continue;

            if ($_SERVER["REQUEST_URI"] == "/$file.php") {
                require_once "./components/layout.php";
                require_once "./src/Controller/" . ucfirst($file) . "Controller.php";
                $page = new Page();
                $page->view();
            }
            
            // else {
            //     echo "헉! 잘못된 접근을 하셨군여. <a href=\"/shop.php\">shop.php</a> ㄱㄱ 하시기 바랍니다.";
            // }
        }

        closedir($dh);
    }
}