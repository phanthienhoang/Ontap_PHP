<?php
    class Person {
        public $name;
        public $relations;
    
        function __construct($name) {
            $this->name      = $name;
            $this->relations = array();
        }
    
        function addRelation($type, $person) {
            if (!isset($this->relations[$type])) {
                $this->relations[$type] = array();
            }
    
            $this->relations[$type][] = $person;
        }
    
        function getRelations($type) {
            if (!isset($this->relations[$type])) {
                return array();
            }
    
            return $this->relations[$type];
        }


        function getRelation($type) {
            $relations = $this->getRelations($type);
            return empty($relations) ? null : $relations[0];
        }
    
        function __toString() {
            return $this->name;
        }

        function addParents($mom, $dad) {
            $mom->addChild($this);
            $dad->addChild($this);
        }
    
        function addChild($child) {
            $this ->addRelation('children', $child);
            $child->addRelation('parents',  $this);
        }
    
        function addSpouse($spouse) {
            $this  ->addRelation('spouse', $spouse);
            $spouse->addRelation('spouse', $this);
        }
    
        function getParents () 
        { 
            return $this->getRelations('parents');  
        }
        function getChildren() 
        { 
            return $this->getRelations('children'); 
        }
        function getSpouse() 
        { 
            return $this->getRelation ('spouse');   
        }
    }

    $john  = new Person('John');
    $jane  = new Person('Jane');
    $sara  = new Person('Sara');
    $mike  = new Person('Mike');
    $bobby = new Person('Bobby');
    $bobby2 = new Person('Bobby2');
    $bobby3 = new Person('Bobby3');
    $billy = new Person('Billy');

    $john ->addSpouse ($jane);
    $sara ->addParents($jane, $john);
    $sara ->addSpouse ($mike);
    $bobby->addParents($sara, $mike);
    $bobby2->addParents($sara, $mike);
    $bobby3->addParents($sara, $mike);
    $billy->addParents($jane, $john);

    function displayFamilyTree($root, $prefix = "") {
        $parents = array($root);

        if ($root->getSpouse() != null) {
            $parents[] = $root->getSpouse();
        }

        echo $prefix . implode(" & ", $parents) . "</br>";

        foreach ($root->getChildren() as $child) {
            displayFamilyTree($child, "....$prefix");
        }
    }

    displayFamilyTree($john);

?>