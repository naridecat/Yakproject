<?php
$type = $_GET["type"];
if ($type == shape) {
    Header("Location:shape.php");
} else if ($type == name) {
    Header("Location:name.php");
} else {
    echo "비정상적인 접근입니다";
}

?>