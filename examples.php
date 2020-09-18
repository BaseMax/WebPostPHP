<?php
<?php
/*
 * @Name: WebPostPHP
 * @Author: Max Base
 * @Date: 2020-09-19
 * @Repository: https://github.com/BaseMax/WebPostPHP
 */
require "src/WebPost.php";

$WebPost=new WebPostPHP();
$WebPost->add("index.php", "name=adam&city=Berlin&Age=30", "Click here");
$WebPost->add("index.php?name=adam&city=Berlin&Age=30", "Click");
