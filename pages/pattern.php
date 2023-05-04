<?php
//fungsi upsideLeft
function upsideLeft($tinggi_bintang)
{
    echo "<p>Triangle Upside Left</p>";
    for ($a = $tinggi_bintang; $a > 0; $a--) {
        for ($b = $tinggi_bintang; $b >= $a; $b--) {
            echo "*";
        }
        echo "<br>";
    }
}

//fungsi upsideRight
function upsideRight($tinggi_bintang)
{
    echo "Triangle Upside Right<br><br>";
    for ($a = $tinggi_bintang; $a > 0; $a--) {
        for ($i = 1; $i <= $a; $i++) {
            echo " &nbsp";
        }
        for ($a1 = $tinggi_bintang; $a1 >= $a; $a1--) {
            echo "*";
        }
        echo "<br>";
    }
}

//fungsi downsideRight
function downsideRight($tinggi_bintang)
{
    echo "<p>Triangle Downside Right</p>";
    for ($a = 1; $a <= $tinggi_bintang; $a++) {
        for ($i = 1; $i <= $a; $i++) {
            echo " &nbsp";
        }
        for ($c = $tinggi_bintang; $c >= $a; $c -= 1) {
            echo "*";
        }
        echo "<br>";
    }
}

//fungsi downsideLeft
function downsideLeft($tinggi_bintang)
{
    echo "<p>Triangle Downside Left</p>";

    for ($a = 1; $a <= $tinggi_bintang; $a++) {
        for ($c = $tinggi_bintang; $c >= $a; $c -= 1) {
            echo " *";
        }
        echo "<br>";
    }
}

//fungsi conditionalStatement memilih pattern mana yang akan dipanggil
function printPattern($patternName, $tinggi_bintang)
{
    switch ($patternName) {
        case "upsideLeft":
            upsideLeft($tinggi_bintang);
            break;
        case "upsideRight":
            upsideRight($tinggi_bintang);
            break;
        case "downsideRight":
            downsideRight($tinggi_bintang);
            break;
        case "downsideLeft":
            downsideLeft($tinggi_bintang);
            break;
        default:
            echo "Invalid pattern name.";
    }
}

//memanggil fungsi upsideLeft, upsideRight, downsideLeft, downsideRight
$tinggi_bintang = 5;
upsideLeft($tinggi_bintang);
echo "<br>";
upsideRight($tinggi_bintang);
echo "<br>";
downsideLeft($tinggi_bintang);
echo "<br>";
downsideRight($tinggi_bintang);

//memanggil fungsi printPattern
/* echo "<br>";
printPattern("upsideLeft", $tinggi_bintang);
echo "<br>";
printPattern("upsideRight", $tinggi_bintang);
echo "<br>";
printPattern("downsideLeft", $tinggi_bintang);
echo "<br>";
printPattern("downsideRight", $tinggi_bintang);
echo "<br>"; */
