<?php
    function selectionSortDescending($mang)
    {
        $sophantu = count($mang);

        for ($i = 0; $i < $sophantu - 1; $i++)
        {
            $max = $i;
            for ($j = $i + 1; $j < $sophantu; $j++){
                if ($mang[$j] > $mang[$max]){
                    $max = $j;
                }
            }
            $temp = $mang[$i];
            $mang[$i] = $mang[$max];
            $mang[$max] = $temp;
        }
        return $mang;
    }

    function disPlay($mang)
    {
        $sophantu = count($mang);
        for ($i = 0; $i < $sophantu; $i++){
            echo $mang[$i] . ' ';
        }
    }

    $mang = array(3,4,7,9,12,1,228,535,15,22,432,32,0,83,21); 
    $mang = selectionSortDescending($mang);
    
    disPlay($mang); 
?>