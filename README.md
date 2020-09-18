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

---------

# Max Base

My nickname is Max, Programming language developer, Full-stack programmer. I love computer scientists, researchers, and compilers. ([Max Base](https://maxbase.org/))

## Asrez Team

A team includes some programmer, developer, designer, researcher(s) especially Max Base.

[Asrez Team](https://www.asrez.com/)

