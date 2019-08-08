<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function creatArr($n){
            $arr =array ();
            for($i = 0 ; $i < $n; $i++){
                do{
                    $number = rand(2,100);
                }while($number % 2 !=0 || in_array($number, $arr) == true);
                $arr[$i] = $number;
            }
            return $arr ; 
        }
        echo '<pre>';
        $array1 = creatArr(13);
        print_r($array1) ;
        echo '</pre>';
    ?>
</body>
</html>