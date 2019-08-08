<?php
    class Node
    {
        public $data;
        public $next;

        function __construct($data)
        {
            $this->data = $data;
            $this->next = NULL;
        }
    
        function readNode()
        {
            return $this->data;
        }
    }
    class LinkList
    {
        private $firstNode;
        private $lastNode;
        private $count;

        function __construct()
        {
            $this->firstNode = NULL;
            $this->lastNode = NULL;
            $this->count = 0;
        }

        public function insertFirst($data)
        {
            $link = new Node($data);
            $link->next = $this->firstNode;
            $this->firstNode = $link;
            if($this->lastNode == NULL)
            {
                $this->lastNode = $link;
            }
            $this->count++;
        }

        public function insertLast($data)
        {
            if($this->firstNode != NULL)
            {
                $link = new Node($data);
                $this->lastNode->next = $link;
                $link->next = NULL;
                $this->lastNode = $link;
                $this->count++;
            }
            else
            {
                $this->insertFirst($data);
            }
        }

        public function deleteFirstNode()
        {
            $temp = $this->firstNode;
            $this->firstNode = $this->firstNode->next;
            if($this->firstNode != NULL)
                $this->count--;
            return $temp;
        } 
        
        public function totalNodes()
        {
            return  "số nốt là: ".$this->count."<br>";
        }

        public function readList()
        {
            $listData = array();
            $current = $this->firstNode;
            while($current != NULL)
            {
                array_push($listData, $current->readNode());
                $current = $current->next;
            }
            return $listData;
        }
    }
    
$linkedList = new LinkList();
$linkedList->insertFirst(1);
$linkedList->insertFirst(2);
$linkedList->insertFirst(3);
$linkedList->insertFirst(4);
$linkedList->insertFirst(5);

echo '<pre>';
print_r($linkedList);
echo '<pre/>';

$linkedList->insertLast(4);
$linkedList->insertLast(5);
$linkedList->deleteFirstNode();
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo '<br/>' .'Mảng được insert vào là :';
echo '<pre>';
print_r($linkData);
echo '<pre/>';
echo $totalNodes;
// echo implode ('-' , $linkData);
?>