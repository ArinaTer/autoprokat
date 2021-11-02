<?php

function getUrl($segment = '', $hasSegment = false) {
    $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] : 'https://'.$_SERVER["SERVER_NAME"];

    if($hasSegment) {
        $url .= $_SERVER["REQUEST_URI"];
    }

    return $url.$segment;
}

?>