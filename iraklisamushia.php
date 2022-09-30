<?php
   
   do{
        $num1 = readline("შეიყვანეთ პირველი რიცხვი \n" );
        $num2 = readline("შეიყვანეთ მეორე რიცხვი");
       
        if(intval($num1) > 0 && intval($num2) < 100){
            $x = intval($num1) * intval($num2);
            echo $x;
            break;
        }
        else if(intval($num1) == 0 || intval($num2) == 0){
            break;
        }
        else{
            echo "xelaxla scade";
        }
    }while ($num1 < $num2);
    
?>
