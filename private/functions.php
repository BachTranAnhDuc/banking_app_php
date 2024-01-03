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

?>
