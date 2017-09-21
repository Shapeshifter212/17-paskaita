<?php
/*    for ($i = 200; $i > 0; $i--){
        echo $i . ", ";
    }   
?>

<pre>
<?php
$a = array("231","24","3787","499","5111");
print_r($a);

shuffle($a);
print_r($a);

sort($a);
print_r($a);



$a= [1, 25, 11, 3, 7, 0, 2];
$sk= 1;

function rask($masyvas, $skaicius) {
	if (in_array($skaicius, $masyvas)) {
	  	echo "yr";
	} else {
	   	echo "ner";
	}
}

rask($a, $sk);


$a= [1, 25, 11, 3, 7, 0, 2];
$sk= 1;

function rask($masyvas, $skaicius) {
	if (in_array($skaicius, $masyvas)) {
	  	echo "yr";
	} else {
	   	echo "ner";
	}
}

rask($a, $sk);


function skr ($a, $b, $h){
	
	$plotas = ($a+$b)/2 * $h;

	return $plotas;
}

echo skr(10, 10 ,20);



function get_pallets ($aikst, $trink_a, $trink_b, $kiekis) {
	
	
	$trink_s = $trink_a * $trink_b;
	$aikst_k = $aikst / $trink_s;
	$pal = $aikst_k / $kiekis;
	
	return ceil($pal);

}
echo get_pallets (5000, 0.3, 0.2, 500);



$nuorodos = [['name' => 'Delfi', 'url' => 'http://delfi.lt'],['name' => '15min', 'url' => 'http://15min.lt']];

// print_r($nuorodos);
function printlinks($nuorodos) {
	foreach ($nuorodos as $nuoroda) {
			echo '<a href="' . $nuoroda['url'] . '">' . $nuoroda['name'] . '</a> ';
	}
}
	
printlinks($nuorodos);

*/

function format_number($t) {
	return str_replace("+370", "8", $t);
}

$tel = "+370 622 88888"; 
echo format_number($tel);