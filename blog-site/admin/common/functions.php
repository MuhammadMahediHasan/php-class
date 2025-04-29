<?php

function dateFormatter($date) {
    $date = strtotime($date);

    return date('F d, Y', $date);
}

?>