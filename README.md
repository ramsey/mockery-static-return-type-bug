# Mockery Static Return Type Bug

💡 **NOTE:** See [Attempting to mock a method with static return type in PHP 8 results in ParseError](https://github.com/mockery/mockery/issues/1155)

[PHP 8.0 introduced the `static` return type.](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.static)

When using Mockery to mock a method with a return type hint of `static`, PHP generates a `ParseError`, with a message similar to the following:

```
ParseError : syntax error, unexpected token "static", expecting identifier /private/var/folders/jt/dm973jds5b33ffvl0x2b8f940000gn/T/MockeryYyJCuE:1
```

The generated file contains the following:

```php
<?php class static {}
```

## To Reproduce With This Repository

``` shell
git clone https://github.com/ramsey/mockery-static-return-type-bug.git
cd mockery-static-return-type-bug/
composer install
./vendor/bin/phpunit
```
