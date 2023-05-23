<?php
    $dta["NAMA"] = "Meytha";
    $dta["TGL_LAHIR"] = "2002-02-20";
    $dta["JKEL"] = "P";
    $dta["NIM"] = "22010102112";
    $dta["JURUSAN"] = "TI-KAB";
    $dta["ALAMAT"]= "Tabanan";

    header("Content-type:application/json; charset=utf-8");
    echo json_encode($dta);
