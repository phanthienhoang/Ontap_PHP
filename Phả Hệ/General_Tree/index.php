<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method = 'POST'>
        <input type="text" name = 'search'>
        <input type='submit' value = 'search'>
    </form>

<?php
    class TreeNode 
    {
        public $data = [];

        public $children = [];

        public function __construct($data)
        {
            $this->data = $data ;
        }

        public function addChildren(TreeNode $node)
        {
            $this->children[] = $node; 
        }
    }
    class Tree
    {
        public $root = NULL ;

        public function __construct(TreeNode $node)
        {
            $this->root = $node;
        }

        public function traverse(TreeNode $node, int $lever = 0)
        {
            if ($node)
            {
                echo str_repeat('-', $lever);
                echo $node->data  . '</br>';
                foreach ($node->children as $childNode)
                {
                    $this->traverse($childNode, $lever +1);
                }
            }
        }

        public function search(TreeNode $children ,$search)
        {
            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {     
                $search = $_POST['search'];
                    if( $search === $key ){
                        echo $value;
                }
            }
        }
    }

    $phuc = new TreeNode ('GIÁM ĐỐC MR.PHÚC');
    $tree = new Tree ($phuc);

    $khanh = new TreeNode ('MR.KHANH');
    $khoa = new TreeNode ('MR.KHOA');
    $chau = new TreeNode ('MRS.CHÂU');
    

    $phuc->addChildren($khanh);
    $phuc->addChildren($khoa);
    $phuc->addChildren($chau);


    $hoang = new TreeNode('PHAN THIÊN HOÀNG');
    $mayquan = new TreeNode('MÂY QUÁN');
    $rin = new TreeNode('LÊ CÔNG RIN');
    $trang = new TreeNode('TRANG TRANG');
    $si = new TreeNode ('MRS.NGỌC');
    $ly = new TreeNode('MRS . LY LY ');
    $phuong = new TreeNode('MRS . PHUONG ');
    $tu = new TreeNode('MRS . TÚ');

    $khanh->addChildren($hoang);
    $rin->addChildren($mayquan);
    $khanh->addChildren($rin);
    $khanh->addChildren($trang);

    $chau->addChildren($si);
    $chau->addChildren($phuong);
    $chau->addChildren($tu);
    $chau->addChildren($ly);

    $tree->traverse($tree->root);

    // $search = 'PHAN THIÊN HOÀNG';
    // $tree->search($tree->root,$search);

    // var_dump( $tree->search($tree->root, $search));

?>

</body>
</html>