<?php
function getFormatedDate (string $dateDb, string $format = 'd-m-y') {
    $date = date_create($dateDb);
    return date_format($date, $format);
}