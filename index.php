<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>sprawdzian</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="kontener">
        <div class="gora">
            <ul>
            <li>Pobierz:</li>
                <li><a href="skrypt.php">skrypt.php,</a></li>
                <li><a href="index.css">arkusz.css</a></li>
                
            </ul>
        </div>
        <div class="lewa">
            <?php

               
                if(isset($_POST['a'], $_POST['b'], $_POST['c'])){
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = $_POST['c'];


                    if($a > $b && $a > $c ){
                        echo 'A najwieksze';
                    }else if($b > $c){
                        echo 'B najwieksze';
                    }else {
                        echo 'C najwieksze';
                    }

                    

                }else {
                    echo 'Brak danych';
                }

              


            ?>
        </div>
        <div class="prawa">
            <ul>
                <li><a href="index.html">START</a></li>
                <li><a href="index.php">SKRYPT</a></li>
                <li><a href="info.html">INFO</a></li>
            </ul>
        </div>
        <div class="dol">
            <p>Wykonał: Kacper Rączka 4j gr1 </p>
        </div>
    </div>
</body>
</html>