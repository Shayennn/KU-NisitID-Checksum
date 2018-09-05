<?php
function GetNisitIDChecksum($nisitid){
    $nisitid = (int) $nisitid;
    $id_len = ceil(log10($nisitid));
    $sumcheck = 0;
    $digit = 0;
    if($id_len > 10 || $id_len < 9){
        return false;
    }
    if($id_len==10){
        $nisitid = floor($nisitid/10);
    }
    for($i=9;$i>=1;$i--){
        $digit = $nisitid%10;
        $nisitid = floor($nisitid/10);
        $sumcheck+=$digit*$i;
    }
    $sumcheck%=11;
    $sumcheck = ($sumcheck==0)?1:($sumcheck%10);
    return $sumcheck;
}

function VerifyNisitID($nisitid){
    $nisitid = (int) $nisitid;
    $id_len = ceil(log10($nisitid));
    if($id_len != 10){
        return false;
    }
    return (($nisitid%10)==GetNisitIDChecksum($nisitid));
}
