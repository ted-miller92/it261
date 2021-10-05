<?php
// using the heredoc

$book = 'Hitchhiker\'s Guide to the Galaxy';
$author = 'Douglas Adams';
$character = 'Arthur Dent';
$actors = array(
    'Martin Freeman',
    'Zoey DeSchanel',
    'Alan Rickman'
);

$content = <<<HITCH

My favorite book is $book. It's a funny story by $author about a regular guy named $character whose home is about to be demolished to make room for a freeway, and all of the sudden he becomes ensnared in a ridiculous intergalactic journey with some colorful characters and a depressed android. 

The movie adaptation with $actors[0] is a great rendition and also stars $actors[1] and $actors[2].
HITCH;

echo $content;