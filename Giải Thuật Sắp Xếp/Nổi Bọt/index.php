<?php
    
    function increase($arr)
    {
        $length = count($arr);
        
        for ($i = 0; $i < ($length - 1); $i++)
        {
            for ($j = $i + 1; $j < $length; $j++)
            {
                if ($arr[$i] > $arr[$j])
                {
                    // hoán vị
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                }
            }
        }
        return $arr;
    }

    function reduction($arr)
    {
        $length = count($arr);
        
        for ($i = 0; $i < ($length - 1); $i++)
        {
            for ($j = $i + 1; $j < $length; $j++)
            {
                if ($arr[$i] < $arr[$j])
                {
                    // hoán vị
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                }
            }
        }
        return $arr;
    }
    
    // Hàm xuất ra màn hình
    function disPlay($arr)
    {
        $length = count($arr);
        for ($i = 0; $i < $length; $i++){
            echo $arr[$i] . ' ';
        }
    }
    
    //--------------------------------------------------
    // Chương trình chính
    $arr = array(1, 5, 9, 2, 4, 9, 1, 5, 9, 2, 4, 9); // mảng theo đề bài
    
    // sắp xếp
    $arr = increase($arr);
    
    // xuất ra màn hình
    disPlay($arr); 

    echo '<br/>';

    $arr = reduction($arr);

    disPlay($arr);

?>