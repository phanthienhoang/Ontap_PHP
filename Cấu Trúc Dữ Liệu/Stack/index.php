<?php
    class Stack
    {
        protected $stack;
        protected $limit;
    
        public function __construct($limit = 10) 
        {
            $this->stack = array();
            $this->limit = $limit;
        }
    
        public function push($item)
        {
            if (count($this->stack) < $this->limit) {
                array_unshift($this->stack, $item);
            } else {
               echo 'ngăn xếp full';
            }
        }
    
        public function pop() 
        {
            if ($this->isEmpty()) 
            {
                echo "ngăn xếp rỗng";
            } else {
                return array_shift($this->stack);
            }
        }
    
        public function top() {
            return current($this->stack);
        }
    
        public function isEmpty() {
            return empty($this->stack);
        }
    }
    $stack = new Stack();
    $stack->push('1');
    $stack->push('2');
    $stack->push('3');
    $stack->push('4');
    $stack->push('5');
    $stack->push('6');
    $stack->push('7');
    $stack->push('8');
    $stack->push('9');
    $stack->push('10');
    echo '<pre>';
    print_r( $stack);
    echo '<pre/>';
    $stack->push('11');
    echo '<br/>';
    echo $stack->pop(); 
    echo '<br/>';
    echo $stack->pop();
    echo '<br/>'; 
    echo $stack->pop(); 
?>