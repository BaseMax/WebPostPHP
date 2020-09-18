# Auto Web Post PHP

### Using AWP-PHP

```php
<?php
postHref("index.php", "name=adam&city=Berlin&Age=30");
?>
```

```php
<?php
postHref("index.php?name=adam&city=Berlin&Age=30");
?>
```

```php
<?php
$values=[
  "name"=>"adam",
  "city"=>"Berlin",
  "Age"=>30,
];
postHref("index.php", $values);
?>
```
