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
        // function BinarySearch($array, $output, $upperBound, $lowerBound)
        // {   
        //     if($lowerBound > $upperBound){
        //         return false;
        //     }
        //     $between = ($lowerBound + $upperBound)/2;
        //     if($output = $array[$between]){
        //         return $output;
        //     }else if($output < $array[$between]){
        //         $lowerBound = $between - 1;
        //         if($output == $array[$lowerBound]){
        //             return $output;
        //         }
        //         return BinarySearch($array, $output, $upperBound, $lowerBound);
        //     }else if($output > $array[$between]){
        //         $upperBound = $between + 1;
        //         if($upperBound==$array[$upperBound]){
        //             return $output;
        //         } 
        //         return BinarySearch($array, $output, $upperBound, $lowerBound);
        //     }
        // }

        function TimKiemNhiPhan($arr , $dau , $cuoi ,$giatri){
            // $dau=0;
            // $cuoi=count($arr) - 1;
            $giua = ($dau +$cuoi)/2;
            // var_dump($cuoi);
            if($dau > $cuoi){
                return false;
            }
            if($giatri == $arr[$giua]){
                return $giua;
            }else if($giatri < $arr[$giua]){
                $cuoi = $giua -1 ;
                if($giatri == $arr[$cuoi]){
                    return $cuoi;
                }
                return TimKiemNhiPhan($arr , $dau , $cuoi ,$giatri);
            }else if($giatri > $arr[$giua]){
                $dau = $giua +1 ;
                if($giatri == $arr[$dau]){
                    return $dau;
                }
                return TimKiemNhiPhan($arr , $dau , $cuoi ,$giatri);
            }
        }

        $array1 = array(1 ,2 ,3 ,4 ,5 ,6 ,9);
        $isCheck = TimKiemNhiPhan( $array1, 0 , 6, 9);
        echo 'vị trí index của số cần tìm là' . ' ' . $isCheck;
    ?>
</body>
</html>