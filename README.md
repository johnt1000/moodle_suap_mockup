# SUAP Mock
API para teste de sincronia com SUAP IFRN.

## Requisitos
* [Docker](https://docs.docker.com/install/)
* [Docker Compose](https://docs.docker.com/compose/install/)
* [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)


## Clone o repositório
```shell
git clone https://github.com/johnt1000/suap_mock.git
```

## Uso
Acesse a raiz do projeto:

```shell
cd suap_mock
```

Inicie o docker usando o comando:

```shell
docker-compose up --build
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
