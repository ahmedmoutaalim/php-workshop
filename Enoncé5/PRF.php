<?php
namespace Professeur;    
use etudiant\etudiant;
class Professeur{

    public $name;

    public $title = 'Prof';

    private $list = array();

    function __construct(string $name, array $list){

        $this->name = $name;

        foreach ($list as $student) {

            if ($student instanceof etudiant) {

                $this->list[] = $student;

            }
    
        }

    
    }


        public function Students($title){
                echo "<h3>". $this->title = $title."<h3>";
                echo " $this->name's students ".count($this->list)." : " ."<br>";
        
             
        
                $index = 1;
        
                foreach ($this->list as $student) {
        
                    echo " $index. $student->name ". "<br>";
        
                    $index++;
        
                }
        
            }
}

