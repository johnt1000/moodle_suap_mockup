# SUAP Mock
API para teste de sincronia com SUAP IFRN.

## Requisitos
* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension

## Ambiente
* VirtualBox
* Vagrant - [laravel/homestead](https://laravel.com/docs/5.7/homestead)

## Uso
Na pasta raiz do projeto:
```shell
php -S [IP]:[PORTA] -t public
```

Exemplo:
```shell
php -S 0.0.0.0:7777 -t public
```

## URLs
Listagem de diários:
```php
http://localhost:7777/diarios/{codigo}
```
Códigos existentes:
* 110110
* 001001
