# Web Post PHP

**WebPostPHP** is a PHP library to build HTML form to send POST request.

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

### HTML Output

```html
<form action="index.php" id="web-post-php-1">
<input type="hidden" name="name" value="adam">
<input type="hidden" name="city" value="Berlin">
<input type="hidden" name="Age" value="30">
<button style="background:transparent;border:0px;">Click</button>
</form>

<form action="index.php" id="web-post-php-2">
<input type="hidden" name="name" value="adam">
<input type="hidden" name="city" value="Berlin">
<input type="hidden" name="Age" value="30">
<button style="background:transparent;border:0px;">Click here</button>
</form>

<form action="index.php" id="web-post-php-3">
<input type="hidden" name="name" value="adam">
<input type="hidden" name="city" value="Berlin">
<input type="hidden" name="Age" value="30">
<button style="background:transparent;border:0px;">Click here</button>
</form>
```

---------

# Max Base

My nickname is Max, Programming language developer, Full-stack programmer. I love computer scientists, researchers, and compilers. ([Max Base](https://maxbase.org/))

## Asrez Team

A team includes some programmer, developer, designer, researcher(s) especially Max Base.

[Asrez Team](https://www.asrez.com/)

