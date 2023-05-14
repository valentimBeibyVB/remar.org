
# Como adicionar novo registro

```php

$user = new User();
$user->name = "Miguel Leite";
$user->email = "miguelleite@gmail.com";
$user->password = password_hash('passowrd',10);
$user->save();

```

# Como actualizar um registro

```php

$user = (new User())->findById(2);
$user->name = "Miguel Pascoal";
$user->email = "miguelpascoal@gmail.com";
$user->password = password_hash('passowrd',10);
$user->save();

```

# Como actualizar um registro

```php

$user = (new User())->findById(2);
$user->destroy();

```