<?php
$nilai = 80;
if ($nilai >= 75) {
    echo "lulus";
} else {
    echo "Tidak lulus";
}
?>
<?php
$hari = 3;
switch ($hari) {
    case 1:
        echo "Senin";
        break;
    case 2:
        echo "Selasa";
        break;
    case 3:
        echo "Rabu";
        break;
        default:
        echo "Hari tidak diketahui";
}
?>