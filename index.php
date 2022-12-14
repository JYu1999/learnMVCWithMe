<?php

require 'functions.php';

//require 'router.php';

require 'database.php';

$config = require 'config.php';

$db = new Database($config['database']);

$post = $db->query("select * from posts");

dd($post);
//$post[1]['title']
//dd($post['title']);
//foreach ($posts as $post){
//    echo "<li>". $post['title']."</li>";
//}
