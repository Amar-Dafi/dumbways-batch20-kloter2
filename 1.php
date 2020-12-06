<?php
class Sales
{
    private $tempat = array(
        "toko" => 0,
        "tempat a" => 2,
        "tempat b" => 5,
        "tempat c" => 1.5,
        "tempat d" => 2.5
    );
    public function perjalananSales($array)
    {
        $key = array_keys($this->tempat);
        array_push($array, current($array));
        $total_jarak = 0;
        $total_bensin = 0;
        $total_biaya = 0;
        $lokasi = null;
        foreach ($array as $value) {
            $jarak = 0;
            $bensin = 0;
            $biaya = 0;
            $value = array_search($value, array_keys($this->tempat));
            if ($lokasi === null) {
                $lokasi = $value;
                continue;
            }
            $tujuan = $value;
            if ($lokasi <= $tujuan) {
                for ($i = $lokasi; $i <= $tujuan; $i++) {
                    if ($i == $lokasi) {
                        continue;
                    }
                    $jarak = $jarak + $this->tempat[$key[$i]];
                }
            } else {
                for ($i = $tujuan; $i <= $lokasi; $i++) {
                    if ($i == $tujuan) {
                        continue;
                    }
                    $jarak = $jarak + $this->tempat[$key[$i]];
                }
            }
            $str_awal =  ucwords(array_search($this->tempat[$key[$lokasi]], $this->tempat));
            $str_tujuan = ucwords(array_search($this->tempat[$key[$tujuan]], $this->tempat));
            $bensin = $jarak / 2.5;
            $biaya = $bensin * 7000;
            echo  $str_awal . ' - ' . $str_tujuan . ' = ' . $jarak . ' KM | Rp' . $biaya . ' | ' . $bensin . ' Liter <br>';
            $lokasi = $tujuan;
            $total_jarak += $jarak;
            $total_bensin += $bensin;
            $total_biaya += $biaya;
        }
        echo 'Total Jarak = ' . $total_jarak . ' KM<br>';
        echo 'Total Harga = Rp.' . $total_biaya . '<br>';
        echo 'Total Bensin = ' . $total_bensin . ' Liter<br>';
    }
} ?>
<html>

<head></head>

<body>
    <form action="" method="post">
        <label>Pilih rute</label>
        <select id="lokasi-1" name="lokasi-1">
            <option value="toko" selected="selected">Toko</option>
        </select>
        <label> ==> </label>
        <select id="lokasi-2" name="lokasi-2">
            <option value="" selected="selected">Pilih</option>
            <option value="toko">Toko</option>
            <option value="tempat a">Tempat A</option>
            <option value="tempat b">Tempat B</option>
            <option value="tempat c">Tempat C</option>
            <option value="tempat d">Tempat D</option>
        </select>
        <label> ==> </label>
        <select id="lokasi-3" name="lokasi-3">
            <option value="" selected="selected">Pilih</option>
            <option value="toko">Toko</option>
            <option value="tempat a">Tempat A</option>
            <option value="tempat b">Tempat B</option>
            <option value="tempat c">Tempat C</option>
            <option value="tempat d">Tempat D</option>
        </select>
        <label> ==> </label>
        <select id="lokasi-4" name="lokasi-4">
            <option value="" selected="selected">Pilih</option>
            <option value="toko">Toko</option>
            <option value="tempat a">Tempat A</option>
            <option value="tempat b">Tempat B</option>
            <option value="tempat c">Tempat C</option>
            <option value="tempat d">Tempat D</option>
        </select>
        <label> ==> </label>
        <select id="lokasi-5" name="lokasi-5">
            <option value="" selected="selected">Pilih</option>
            <option value="toko">Toko</option>
            <option value="tempat a">Tempat A</option>
            <option value="tempat b">Tempat B</option>
            <option value="tempat c">Tempat C</option>
            <option value="tempat d">Tempat D</option>
        </select>
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $arr = array();
        for ($i = 1; $i <= 5; $i++){
            if ($_POST["lokasi-$i"] != "") {
                array_push($arr, $_POST["lokasi-$i"]);
            }
        }
        $sales = new Sales();
        $sales->perjalananSales($arr);
    }

    ?>
</body>

</html>