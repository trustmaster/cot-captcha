<?php

include 'securimage.php';

$img = new securimage();
$img->image_width =250;
$img->image_height=48;
$img->code_length=6;
$img->charset="123456789";
$img->text_x_start=0;
$img->use_gd_font=true;
$img->gd_font_file = 'caveman.gdf';
$img->ttf_file = "./elephant.ttf";
$img->font_size=22;
$img->text_angle_minimum=-10;
$img->text_angle_maximum = 10;
$img->text_minimum_distance=10;
$img->text_maximum_distance=15;
$img->image_bg_color="#ffffff";
$img->text_color="#000000";
$img->use_multi_text=false;
$img->line_color = "#bbbbbb";
$img->arc_linethrough = false;
$img->wordlist_file = 'words.txt';
$img->use_wordlist = true;
$img->show(); // alternate use:  $img->show('/path/to/background.jpg');

?>