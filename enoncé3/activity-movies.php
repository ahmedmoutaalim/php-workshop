


<?php 

function showResult( $d=5 , $f=5){

$filmsProduction = [

    'Woody Allen'=>['Wonder Wheel', 'Café Society' , 'Magic in the Moonlight' ,'Blue Jasmine', 'Minuit à Paris'],
  'Steven Spielberg'=>['The post','Ready player one','The BFG','Bridge of spies','War Horse'],
  'David Lynch'=>['Lost Highway', 'Eraserhead', 'The Elephant Man',  'The Straight Story',' Blue Velvet' ],
    'George Lucas'=>['Star Wars', 'Hijos de la fuerza',  'Laser Brain ', 'Boba Fans','Rogue One'],
   ' Martin Scorsese'=> ['I Call First' ,' Street Scenes', ' Boxcar Bertha ', 'Mean Streets', ' Italianamerican']
];





// foreach($filmsProduction as $key => $title){

//     echo "<h3>$key :</h3> ";
//     echo "<br>";

   

//     foreach($title as $films){
//         echo " <li>$films </li> <br>"; 
        
//     }
    
//     echo "<hr>";
// }




    $director = array_rand($filmsProduction,$d);
    $filmName = array_rand($director,$f);



    foreach($director as $key => $name){

        echo "<h3>$name :</h3> ";
        echo "<br>";
         
        foreach($filmName as  $title){

            echo  '<li>' .$filmsProduction[$name][$title] .' </li>'; 
        }
       
    
    
        
        echo "<hr>";
    }


}showResult(2,2)

?>



