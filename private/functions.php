<?php
function url_for($script_path) {
    return WWW_ROOT . $script_path;
}

function ued($string = "") {
    return urlencode($string);
}

function raw_ued($string = "") {
    return rawurlencode($string);
}

function hsc($string = "") {
    return htmlspecialchars($string);
}

function error_404() {
    header($_SERVER["SERVER_PROTOCOL"] . "404 Not Found");
}

function error_500() {
    header($_SERVER["SERVER_PROTOCOL"] . "500 Internal Server Error");
}

function redirect_to($location) {
    header("Location: " . $location);
    exit;
}

?>
