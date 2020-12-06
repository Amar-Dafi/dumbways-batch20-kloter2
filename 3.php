<?php
    class Pola{
        function gambarPola($int){
            $a = 1;
            $b = $int;
            for($i = 1; $i<=$int; $i++){
                for($j = 1; $j<=$int; $j++){
                    if($i == $a || $j == $a || $i == $b || $j == $b){
                        echo 'x ';
                    }elseif($i == $a+1 || $j == $a+1 || $i == $b-1 || $j == $b-1){
                        echo '  ';
                    }elseif($i == $a+2 || $j == $a+2 || $i == $b-2 || $j == $b-2){
                        echo 'y ';
                    }elseif($i == $a+3 || $j == $a+3 || $i == $b-3 || $j == $b-3){
                        echo '  ';
                    }elseif($i == $a+4 || $j == $a+4 || $i == $b-4 || $j == $b-4){
                        echo 'z ';
                    }else{
                        echo '  ';
                    }
                }
                echo '<br>';
            }
        }
    }
?>
<html>
    <head>
    </head>
    <body>
        <form action="" method="post">
            <label> Ukuran pola : </label>
            <input type="text" name="ukuran">
            <input type="submit" name="submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $ukuran = $_POST['ukuran'];
                $pola = new Pola();
                echo '<pre>';
                $pola->gambarPola($ukuran);
                echo '</pre>';
            }
            ?>
    </body>
</html>