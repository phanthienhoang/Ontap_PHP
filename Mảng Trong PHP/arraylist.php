<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // mảng 1 chiều
        $arrayOneWay =array(
            '1'=>'hoàng',
            '2' => 'long',
            '3' => 'ái',
            '4' => 'bá'
        );
        //duyệt mảng 
        foreach($arrayOneWay as $key => $val){
            echo 'key' . ' ' . $key .' ' . 'giá trị:' . ' ' . $val .' <br/>' ;
        }

        // mảng đa chiều 
       
        $array2 = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );
        // dùng 2 vòng lập để duyệt mảng đa chiều : 
        foreach ($array2 as $k => $v){
            foreach($v as $k1 => $v1){
                echo   "{$v1}";
            }
        }   
    ?>
</body>
</html>