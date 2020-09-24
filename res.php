<?php

$shape = $_POST["shape"];
$color = $_POST["color"];
$dosageForm = $_POST["dosageForm"];
$divisionLine = $_POST["divisionLine"];
include ("simple_html_dom.php");

// Create DOM from URL or file
$html = file_get_html('https://m.terms.naver.com/medicineSearch.nhn?shape='.$shape.'&color='.$color.'&dosageForm='.$dosageForm.'&divisionLine='.$divisionLine);

foreach($html->find('h3[class=subject]') as $e) {
    echo $e->innertext . '<br>';
}

?>