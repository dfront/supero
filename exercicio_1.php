<?php
   
   for($i = 0; $i <= 100; $i++){
       switch($i){
	   case round($i%3)==0 && round($i%5)==0:
	       print('FizzBuzz');    
	       break;
	   case round($i%3)==0:
	       print('Fizz');    
	       break;
	   case round($i%5)==0:
	       print('Buzz');	       
	       break;
	   default:
	       print($i);
       } 
       print('\n');
   }		     


