<?php
// Name Array
$a[] = "Alvin";
$a[] = "Ahmad";
$a[] = "Abraham";
$a[] = "Becky";
$a[] = "Budi";
$a[] = "Chelsea";
$a[] = "Chika";
$a[] = "Doni";
$a[] = "Dani";
$a[] = "Erik";
$a[] = "Manahan";
$a[] = "Lubis";
$a[] = "Raja";
$a[] = "Ratu";
$a[] = "Pandi";
$a[] = "Jaka";
$a[] = "Saleh";
$a[] = "Syukur";
$a[] = "Wiwiek";
$a[] = "Yolanda";
$a[] = "Zain";
$a[] = "Zein";

//Get the search query from the form
$q = $_REQUEST["q"];

$hint = "";

//Go through the Name array find a match as long query not empty
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $name) {
        if (stristr ($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint = ", $name";
            }
        }
    }
}

// Output the text suggestions if query  was not found
echo $hint === "" ? "No Suggestions" : $hint;
?>