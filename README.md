# Web Post PHP

### Using Web Post PHP

```php
<?php
$WebPost=new WebPostPHP();

$WebPost->add("index.php?name=adam&city=Berlin&Age=30", "Click");

$WebPost->add("index.php", "name=adam&city=Berlin&Age=30", "Click here");

$values=[
  "name"=>"adam",
  "city"=>"Berlin",
  "Age"=>30,
];
$WebPost->add("index.php", $values, "Click here");
?>
```
