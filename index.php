<?php

require 'functions.php';

//require 'router.php';

require 'database.php';

$config = require 'config.php';

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id= ?";

$post = $db->query($query,[$id])->fetch();

dd($post);
//$post[1]['title']
//dd($post['title']);
//foreach ($posts as $post){
//    echo "<li>". $post['title']."</li>";
//}
