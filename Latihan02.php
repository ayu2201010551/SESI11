<?php
    $dta[0]["NAMA"] = "Meytha";
    $dta[0]["TGL_LAHIR"] = "2002-02-20";
    $dta[0]["JKEL"] = "P";
    $dta[0]["NIM"] = "22010102112";
    $dta[0]["JURUSAN"] = "TI-KAB";
    $dta[0]["ALAMAT"]= "Tabanan";

    $dta[1]["NAMA"] = "Gung Wis";
    $dta[1]["TGL_LAHIR"] = "2003-03-30";
    $dta[1]["JKEL"] = "L";
    $dta[1]["NIM"] = "22010102323";
    $dta[1]["JURUSAN"] = "MTI";
    $dta[1]["ALAMAT"]= "Gianyar";

    $dta[2]["NAMA"] = "Diah";
    $dta[2]["TGL_LAHIR"] = "2002-04-14";
    $dta[2]["JKEL"] = "P";
    $dta[2]["NIM"] = "22010102424";
    $dta[2]["JURUSAN"] = "DKV";
    $dta[2]["ALAMAT"]= "Buleleng";

    
    $dta[3]["NAMA"] = "Bayu";
    $dta[3]["TGL_LAHIR"] = "2002-06-16";
    $dta[3]["JKEL"] = "L";
    $dta[3]["NIM"] = "22010102211";
    $dta[3]["JURUSAN"] = "DKV";
    $dta[3]["ALAMAT"]= "Tabanan";

    header("Content-type:application/json; charset=utf-8");
    echo json_encode($dta);
