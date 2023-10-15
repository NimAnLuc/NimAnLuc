<?php

use App\Models\Topic;
use App\Libraries\MyClass;

if(isset($_POST['THEM'])){
    $topic= new Topic();
    $topic->name= $_POST ['name'];
    $topic->slug= (strlen($_POST['slug'])>0)? $_POST['slug']:MyClass :: str_slug($_POST['name']);
    $topic->description= $_POST ['description'];
    $topic->status= $_POST ['status'];


    $topic->created_at= date('Y-m-d h:i:s');
    $topic->created_by= (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;

    var_dump($topic);
    $topic->save();
    header("location:index.php?option=topic");
}