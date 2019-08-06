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
       function kiem_tra($mang, $can_tim)
       {
           for ($i = 0; $i < count($mang); $i++)
           { 
               if ($mang[$i] == $can_tim)
               { 
                   return true; 
               }
           }
           return false; 
       }
       $mang = array(321,312,3,4,5,45,56,5,7,6,787,8,7,2);
         
       $can_tim = 7;
       var_dump(kiem_tra($mang, $can_tim));
         
       if (kiem_tra($mang, $can_tim)){
           echo 'Số ' . $can_tim . ' có nằm trong mảng';
       }
    ?>
</body>
</html>