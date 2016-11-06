<?php
$recepient = "dialoggg1994@gmail.com";
$sitename = "Название сайта";

$phone = trim($_POST["phone"]);
$height = trim($_POST["HeightProduct"]);
$width = trim($_POST["WidthProduct"]);
$fileName = $_POST["fileName"];
$message = "\n Телефон: $phone \n Высота $height \n Ширина $width \n Картинка $fileName";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");