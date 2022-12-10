<?php

require 'functions.php';

//require 'router.php';

require 'database.php';

$db = new Database();

$post = $db->query("select * from posts where id = 1");

//print_r($posts);

dd($post['title']);
//foreach ($posts as $post){
//    echo "<li>". $post['title']."</li>";
//}
