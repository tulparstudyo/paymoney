# paymoney
Bazı durumlarda Laravel, package discovery işlemini kaçırabilir. Bu durumda config/app.php içinde providers array'ine elle ekleyiniz
```php
'providers' => [
    // ...
    TulparStudyo\Paymoney\PaymoneyServiceProvider::class,
],
```
