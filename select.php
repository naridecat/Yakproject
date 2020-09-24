<?php
$type = $_GET["type"];
if ($type == shape) {
    Header("Location:shape.html");
} else if ($type == name) {
    Header("Location:name.html");
} else {
    echo "비정상적인 접근입니다";
}

?>
