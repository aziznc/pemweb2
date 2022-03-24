<?php
function kelulusan($nilai) {
    if ($nilai > 55 ){
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}
function grade($nilai) {
// isi fungsi grade
if ($nilai >= 85){
    return "A";
}elseif ($nilai >= 70) {
    return  "B";
}elseif ($nilai >= 56) {
    return  "C";
}elseif ($nilai >= 36) {
    return "D";
}elseif ($nilai >= 0) {
    return  "E";
}else {
    return  "I";
}
}
?>