<?php
    //  echo "ola";
    // ok daccod
    $string="ola";
    $integer= 10;
    $float = 20.50;
    $bolean = true;
    $ep = "comos es tas";
    echo $string ." ". $ep;
    $integer =  $integer -1;
    $tb = ["ola","stp"];
    echo $tb[0];
    if($string === "ola"){
        $tb[0]= "JE SAIS";
        echo $tb[0];
    }else{
        
        $tb[0]= "error";
        echo $tb[0];

    };

    $integer === 19 ? $integer = 2000 : $integer = 20 ;
    echo "$integer";
     
    switch ($integer) {
        case '20':
            $integer = 19;
            break;
        
        default:
            
            break;
        
        
    }
    while ($integer != 25) {
         $integer++;
        echo "\n". $integer;
    };
    $i = 1;
    for ($i = 0; $i < 10 ; $i++) { 
        $float = $i;
        echo "\n". $float;
    };

    foreach ($tb as $value) {
        echo "\n". $value . " each" . "\n" ;
    };

    class Obj {
        public function  __construct($x,$y)
        {
            $this -> x = $x;
            $this -> y = $y;
        }
    }
        $lol = new Obj("olaa"," sa va");
        echo $lol -> x . " " . $lol ->y; 


    function test(){
        echo " FONCTIONNNNEEE!!!!!!!!!!!!!!!!!!!!!!!" ;
    };
    test();
    $phrase = "\n la phrase je nes pas d'inspi ";

    echo strtoupper($phrase);
    echo substr_replace($phrase,"g",5,1);
    echo strlen($phrase);
    echo strtolower( strtoupper($phrase));
    echo substr($phrase,0,-3);
    echo abs($integer);
    $tb = [1,2,3];
    echo max($tb);
    echo min($tb);
    echo  round( rand());

    
    ?>