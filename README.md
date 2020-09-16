# RequestApi Library Test

[![Maintainer](http://img.shields.io/badge/maintainer-@caiolandgraf-blue.svg?style=flat-square)](https://twitter.com/caiolandgraf)
[![Source Code](http://img.shields.io/badge/source-caiolandgraf/requestapi-blue.svg?style=flat-square)](https://github.com/caiolandgraf/requestapi)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/caiolandgraf/requestapi.svg?style=flat-square)](https://packagist.org/packages/caiolandgraf/requestapi)
[![Latest Version](https://img.shields.io/github/release/caiolandgraf/requestapi.svg?style=flat-square)](https://github.com/caiolandgraf/requestapi/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/caiolandgraf/requestapi.svg?style=flat-square)](https://scrutinizer-ci.com/g/caiolandgraf/requestapi)
[![Quality Score](https://img.shields.io/scrutinizer/g/caiolandgraf/requestapi.svg?style=flat-square)](https://scrutinizer-ci.com/g/caiolandgraf/requestapi)
[![Total Downloads](https://img.shields.io/packagist/dt/caiolandgraf/requestapi.svg?style=flat-square)](https://packagist.org/packages/caiolandgraf/requestapi)

###### RequestApi Library is a small set of classes developed by Suporte Informátika to facilitate communication with API's and third-party forms...

RequestApi Library é um pequeno conjunto de classes desenvolvidas pela **[Suporte Informátika](https://www.suporteinformatika.com.br)** para facilitar a comunicação com API's e formulários de terceiros.

Você pode saber mais **[clicando aqui](https://www.suporteinformatika.com.br)**.

### Highlights

- Simple installation (Instalação simples)
- Easy abstraction of API's (Facíl abstração de API's)
- Easy implementation with forms (Facíl implementação com formulários)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Uploader is available via Composer:

```bash
"caiolandgraf/requestapi": "^1.0"
```

or run

```bash
composer require caiolandgraf/requestapi
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:

#### Api's Abstraction :

```php
<?php

require __DIR__ . "/../vendor/autoload.php";

use CaioLandgraf\Api\RequestApi;

$request = new RequestApi("https://www.apiurl.com");

// login
$request->post([
    "login" => "email@suporteinformatika.com.br",
    "password" => "password"
], "login");

// read
$user = $request->get([
    "id" => "1"
], "user");

//update
$user->put([
    "first_name" => "Caio",
    "last_name" => "Landgraf",
    "genre" => "male",
    "datebirth" => "1980-01-02",
    "document" => "888888888"
], "user/update");

//test and result
if ($user->error()) {
    $user->error(); //object
} else {
    $user->response(); //object
}
```

#### Form abstraction

```php
<?php

require __DIR__ . "/../vendor/autoload.php";

use CaioLandgraf\Api\RequestApi;

$request = new RequestApi("https://www.form.com/contact");

$request->post([
    "name" => "Name",
    "email" => "email@suporteinformatika.com.br",
    "subject" => "Subject",
    "message" => "Message"
]);

//test and result
if ($request->error()) {
    $request->error(); //object
} else {
    $request->response(); //object
}
```

## Contributing

Please see [CONTRIBUTING](https://github.com/caiolandgraf/uploader/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email eu.caiolandgraf@gmail.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para eu.caiolandgraf@gmail.com em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Caio Landgraf](https://github.com/caiolandgraf) (Developer)
- [Suporte Informatika](https://github.com/caiolandgraf) (Team)
- [All Contributors](https://github.com/caiolandgraf/requestapi/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/caiolandgraf/requestapi/blob/master/LICENSE) for more information.