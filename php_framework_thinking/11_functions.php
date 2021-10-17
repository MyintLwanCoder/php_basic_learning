<?php 

   $personBio=[
   	"name"=>"hlaing min than",
   	"age"=>20,
   	"isMarried"=> true 
   ];
    require "function.php";
   // function name($name, $age){
   // 	echo "my name is $name ,my age is $age";
   // }
   // name("Kyaw Aung" , 30);
   //uncwords()
   // echo "<pre>";
   // die(var_dump($personBio));
   // htmlspecialchars();
   // print_r();
   // var_dump();
   // function dd($data){
   // 	echo "<pre>";
   //  die(var_dump($data));
   // }

   dd($personBio);
   require "index.view.php";