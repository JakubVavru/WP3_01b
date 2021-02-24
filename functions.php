<?php

function getCarInfo(int $year):void {

    if ($year <= 1960) {
        echo "To je fakt veterán!";
    } elseif ($year <= 1990) {
        echo "Auto by na silnici už raději být nemělo";
    } elseif ($year <= 2000) {
        echo "Budete platit velkou silniční daň i povinné ručení";
    } elseif ($year <= 2010) {
        echo "Navštěvujte servis pravidelně";
    } else {
        echo "Auto je způsobilé";
        }
}

function getTax(int $engine):void {

    if ($engine <= 800) {
        echo "/Daň : 1200Kč";
    } elseif ($engine <= 1250) {
        echo "/Daň : 1800Kč";
    } elseif ($engine <= 1500) {
        echo "/Daň : 2400Kč";
    } elseif ($engine <= 2000) {
        echo "/Daň : 3000Kč";
    } elseif ($engine <= 3000) {
        echo "/Daň : 3600Kč";
    } else {
        echo "/Daň : 4200Kč";
    }

}