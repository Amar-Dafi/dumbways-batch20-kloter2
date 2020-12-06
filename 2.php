<?php
    class Cerita{
        private $cerita = ['Pagi itu sangatlah cerah, mentari pagi muncul memancarkan sinar cerah dengan semangat 67 eh semangat 45 maksudnya', 
                            'Sama denganku, hari ini adalah hari ulang tahun orang yang sangat aku kagumi bahkan kucintai',
                            'Semua sudah aku persiapkan termasuk kue ultah serta kadonya', 
                            'Aku masuk ke kelas dengan hati gembira dan bibir tersenyum-senyum sendiri', 
                            'Kakiku melangkah tepat di depan pintu masuk kelas dan disambut ceria oleh sahabat sahabatku Syarif dan Renata.',
                            'Yaps! Aku hampir lupa, aku Sherly kepanjangan dari Sherlyna rantika putri', 
                            'Cewek manis berkumis tipis yang kini sedang dilanda asmara cinta.'];
        
        public function cariKata($kata){
            for($i = 0; $i< sizeof($this->cerita); $i++){
                $kalimat = strtolower($this->cerita[$i]);
                $jumlah_kata = substr_count($kalimat, $kata);
                if($jumlah_kata > 0) echo 'kata "'.$kata.'" muncul '.$jumlah_kata.' kali pada index '.$i.'<br>';
            }
        }
        public function tampilkanCerita(){
            for($i = 0; $i< sizeof($this->cerita); $i++){
                $kalimat = strtolower($this->cerita[$i]);
                echo 'index '.$i.' ==> '.$kalimat.'<br>';
            }
        }
    }
?>
<html>
    <head>
    </head>
    <body>
    <form action="" method="post">
        <label> Cari Kata : </label><input type="text" name="kata"><input type="submit" name="submit">
    </form>
    <?php
        $cerita = new Cerita();
        $cerita->tampilkanCerita();
        if(isset($_POST['submit'])){
            $cerita->cariKata($_POST['kata']);
        }
    ?>
    </body>
</html>