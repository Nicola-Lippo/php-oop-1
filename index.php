<?php
//creo la classe, le classi si nominano in PascalCase
class Movie
{
    public $title;
    public $category;
}
//definisco le variabili d?istanza
$ilgrandefilm = new Movie();
$ilgrandefilm->title = 'Il Grande Film';
$ilgrandefilm->category = 'Documentary';

$lagranderisata = new Movie();
$lagranderisata->title = 'La Grande Risata';
$lagranderisata->category = 'Comedy';

$vpervuejs = new Movie();
$vpervuejs->title = 'V per Vuejs';
$vpervuejs->category = 'Action';

$thelordofping = new Movie();
$thelordofping->title = 'The Lord of Ping';
$thelordofping->category = 'Fantasy';

var_dump($ilgrandefilm);
var_dump($lagranderisata);
var_dump($vpervuejs);
var_dump($thelordofping);
