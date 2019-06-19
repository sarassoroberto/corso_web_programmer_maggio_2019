<?php

$img = file_get_contents("http://93.62.170.226/foto/mao/867_Hb10.jpg");

// qualche ragionamento sul nome del file il formato
$folder_img = 'download/immagini/mao/originali/';
@mkdir($folder_img,null,true);

file_put_contents("$folder_img/immagine.jpg",$img);