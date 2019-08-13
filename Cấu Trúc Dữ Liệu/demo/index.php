<?php

/**
 * Class Node
 */
class Node
{
    public $data;
    public $next;

    public function __construct($item)
    {
        $this->data = $item;
        $this->next = null;
    }
}

/**
 * Class LinkList
 */
class LinkList
{
    public $head = null;

    private static $count = 0;

    /**
     * @return int
     */
    public function GetCount()
    {
        return self::$count;
    }

    /**
     * @param mixed $item
     */
    public function InsertAtFist($item) {
        if ($this->head == null) {
            $this->head = new Node($item);
        } else {
            $temp = new Node($item);

            $temp->next = $this->head;

            $this->head = $temp;
        }

        self::$count++;
    }

    /**
     * @param mixed $item
     */
    public function InsertAtLast($item) {
        if ($this->head == null) {
            $this->head = new Node($item);
        } else {
            /** @var Node $current */
            $current = $this->head;
            while ($current->next != null)
            {
                $current = $current->next;
            }

            $current->next = new Node($item);
        }

        self::$count++;
    }

    /**
     * Delete the node which value matched with provided key
     * @param $key
     */
    public function Delete($key)
    {
        /** @var Node $current */
        $current = $previous = $this->head;

        while($current->data != $key) {
            $previous = $current;
            $current = $current->next;
        }

        // For the first node
        if ($current == $previous) {
            $this->head = $current->next;
        }

        $previous->next = $current->next;

        self::$count--;
    }

    /**
     * Print the link list as string like 1->3-> ...
     */
    public function PrintAsList()
    {
        $items = [];
        /** @var Node $current */
        $current = $this->head;
        while($current != null) {
            array_push($items, $current->data);
            $current = $current->next;
        }

        $str = '';
        foreach($items as $item)
        {
            $str .= $item . '->';
        }

        echo $str;

        echo PHP_EOL;
    }
}

$ll = new LinkList();

$ll->InsertAtFist(1);
$ll->InsertAtLast(2);
$ll->InsertAtFist(3);
$ll->InsertAtFist(4);
$ll->InsertAtFist(5);
$ll->InsertAtLast(6);
$ll->InsertAtLast(7);
$ll->InsertAtLast(8);

$ll->PrintAsList();
echo 'Total elements ' . $ll->GetCount();
echo '<br/>';
$ll->Delete(6);
$ll->PrintAsList();
echo 'Total elements ' . $ll->GetCount();
echo '<br/>';
$ll->Delete(7);
$ll->PrintAsList();
echo 'Total elements ' . $ll->GetCount();
echo '<br/>';
$ll->Delete(8);
$ll->PrintAsList();
echo 'Total elements ' . $ll->GetCount();


// xóa node cuối 
// public function deleteLastNode()
// {
//     if($this->firstNode != NULL)
//     {
//         if($this->firstNode->next == NULL)
//         {
//             $this->firstNode = NULL;
//             $this->count--;
//         }
//         else
//         {
//             $previousNode = $this->firstNode;
//             $currentNode = $this->firstNode->next;

//             while($currentNode->next != NULL)
//             {
//                 $previousNode = $currentNode;
//                 $currentNode = $currentNode->next;
//             }

//             $previousNode->next = NULL;
//             $this->count--;
//         }
//     }
// }   
 


// tìm số 

// public function find($key)
// {
//     $current = $this->firstNode;
//     while($current->data != $key)
//     {
//         if($current->next == NULL)
//             return null;
//         else
//             $current = $current->next;
//     }
//     return $current;
// }