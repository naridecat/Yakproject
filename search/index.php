<html>
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
<script type="text/javascript">
$(function(){
$('img.lazy').lazyload();
});
</script>
<style>
  a {
    text-decoration: none;
    color: black;
  }
  .btns{
    background: lightgray;
    font-size:20px;
    color:black;
    display: block;
    padding:10px 20px 10px 20px;
    width: 90vw;
  }
</style>
</head>
<body style="overflow-x:hidden";>
<a href="https://nedrug.mfds.go.kr/index#none">출처 : https://nedrug.mfds.go.kr/index#none</a>
<br><br>
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
$page = $_GET['page'];
$page_ = $page + 1;
$spage = $page - 1;

$suc = $page * 30;
for ($i = $page * 30; $i<=count($shape); $i++) {
  if ($shape[$i] == $shape_d and $color[$i] == $color_d ) {
    if ($text[$i] == $text_d or $te[$i] == $text_d){
      if ($suc != $page * 30 + 10){
        echo "<img style='vertical-align: middle;'src='".$img[$i]."' width='100px' height='50px'><a href='res.php?id=".$i."'>".$name[$i]."</a><br>";
        echo "<hr>";
        $suc++;
      }
      $res++;
    } else if ($res == count($name)){
      break;
    }
  }
}
if ($suc != 0 and $res != 0){
echo "<a href='index.php?color=".$color_d."&shape=".$shape_d."&text=".$text_d."&page=".$page_."' style='width: 40vw; display: block; height: 50px;'>다음 페이지로</a>";
if ($page != 0){
echo "<a href='index.php?color=".$color_d."&shape=".$shape_d."&text=".$text_d."&page=".$spage."' style='width: 40vw; display: block; height: 50px;'>이전 페이지로</a></div>";
}}
if ($res == 0){
  echo "검색결과가 없습니다 :(";
}

echo "</body>
</html>";
?>
