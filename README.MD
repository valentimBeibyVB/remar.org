# Requisitos

Para rodar o projecto na sua máquina certifica-se de que tenhas a versão do XAMPP actualizada com a versão do PHP 8.x.x e que tenha o composer e o git instalado na sua máquina.

# Como Rodar o projecto

- Primeiro deves instalar as dependencias 

```bash

# instalar as depedências do projecto
composer install
```

- Em seguida deves acessar o projecto atraves de um servidor local (XAMPP)

```bash

# http://localhost/remar.ao
```

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