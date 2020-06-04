



<?php 

// function du factorielle 

function factorielle($n){

    if($n===0){
        return 1  .' <br>';
    }
       
    else{

        return $n*factorielle($n-1) .' <br>'; 
    }
 
}


//function de la somme 




function somme($num1,$num2){

   return $num1+$num2  .'<br>';

 echo   results($r);
}






//premier ou non 

function premier($number){

for($i=2 ; $i < $number ; $i++){

       if($number % $i == 0){

        return "false"  ; 
       }else{
         return" true";
        } 
  }


}



//performOperation :

$results = "premier";

switch ($results){

    
    case "factorielle" :

        echo factorielle(10);

    break;

    case "somme" :

        echo somme(7,5);

    break;
    case "premier" :


        echo premier(7);

    default;
        

}
    






// echo call_user_func('somme',4,6);
// echo call_user_func('factorielle',20);
// echo call_user_func('premier',17);


?>





