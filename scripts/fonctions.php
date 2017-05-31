<?php
    echo "MIAOU";

    function getDateFormat($dateRaw, $format='Y-m-d'){
        echo "plop";
        return new Date($format, strtotime($dateRaw));
    }