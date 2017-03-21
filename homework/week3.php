<?php
    function trip_cal($km, $fuel, $priceperliter){
        $totalprice = ($fuel * $km * $priceperliter) / 100;
        return number_format($totalprice, 2);
    }
?>