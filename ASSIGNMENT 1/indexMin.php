<?php

#rastgele bir array
$numbers = array(10,20,5,42,24,1,36,55,75,2);


function lowestIndex($array){
    #arrayin ilk elemanı değişkene sabitlenir
     $lowest = $array[0];
    #dizinin en başından en sona kullanılacak bir döngü
    foreach($array as $index)
{   #index küçükse değişkenin yerini alır
    if($index<$lowest)
{   

    $lowest = $index;

}  
}
#yazdırma
echo "Dizinin en küçük elemanı: ". $lowest. "<br>";

}
#fonksiyonu çağırma
lowestIndex($numbers);

?>