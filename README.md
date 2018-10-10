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
Acesse a raiz do projeto:

```shell
cd path_do_projeto
```

Instala dependências:

```shell
composer install
```

Roda servidor:

```shell
php -S [IP]:[PORTA] -t public
```

Exemplo:
```shell
php -S 0.0.0.0:7777 -t public
```

## URLs
### Listagem de diários:
```php
http://localhost:7777/diarios/{codigo}
```
#### Códigos existentes:
* 1
* 2

### Listagem de matriculados do diário:
```php
http://localhost:7777/matriculados/{diario_id}
```
#### Códigos existentes:
* 1
* 2
