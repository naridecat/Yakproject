<?php
$name_f = file_get_contents('name.txt');
$shape_f = file_get_contents('shape.txt');
$img_f = file_get_contents('img.txt');
$color_f = file_get_contents('color.txt');
$for_f = file_get_contents('fors.txt');
$text_f = file_get_contents('up_text.txt');
$te_f = file_get_contents('down_text.txt');
$com_f = file_get_contents('company.txt');
$name = explode( '|', $name_f );
$shape = explode( ',', $shape_f);
$img = explode( ',', $img_f);
$color = explode( ',', $color_f);
$for = explode( '|', $for_f);
$text = explode( ',', $text_f);
$te = explode( ',', $te_f);
$com = explode( ',', $com_f);
$shape_d = $_GET['shape'];
$color_d = $_GET['color'];
$text_d = $_GET['text'];
echo "<html><head><meta charset='utf-8'>";
$name_f = file_get_contents('name.txt');
$name = explode( '|', $name_f );

$i = $_GET['id'];
echo "<p>YP::약 정보</p>";
echo "<h2>".$name[$i]."</h2>";
echo '<img src="'.$img[$i].'" width="300px"><br>';
echo "모양 : ".$shape[$i]."<br>";
echo "색깔 : ".$color[$i]."<br>";
echo "회사 : ".$com[$i]."<br>";
echo "인쇄내용 : ".$text[$i]."<br>";
echo "분류명 : ".$for[$i]."<br>";

echo ""

?>