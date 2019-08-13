<?php
    function insertionSort($mang)  
    {
        $sophantu = count($mang);

        for ($i = 0; $i < $sophantu; $i++)
        {
            $loop = $i;
            $current = $mang[$i];
      
            // điều kiện dừng là $loop <= 0 (tức là hết mảng) hoặc
            // phần tử thứ $loop - 1 lớn hơn phần tử thứ $i (vì đã tìm đc đúng vị trí)
            // nếu một trong 2 điều kiện đó đúng thì sẽ dừng vòng lặp
            while($loop > 0 && ($mang[$loop - 1] < $current))
            {
                // Di dời các phần tử lên 1 bậc
                $mang[$loop] = $mang[$loop - 1];
                $loop -= 1;
            }      
            // Gán giá trị $current vào vị trí tìm được
            $mang[$loop] = $current;
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

    $mang = array(3,2,1,4,5,6,7,8,9); 
    $mang = insertionSort($mang);
    
    disPlay($mang); 
?>