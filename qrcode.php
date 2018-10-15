<?php
include "phpqrcode/grlib.php";

QRcode::png("http://www.dumetschool.com","image.png","L",4,4);
echo "<img src='image.png'/>";

?>