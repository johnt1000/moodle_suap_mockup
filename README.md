# Moodle/SUAP Mockup
API para teste de sincronia do projeto de integração entre Moodle e SUAP do IFRN.

# Projetos Relacionados
* [https://github.com/CoticEaDIFRN/moodle_suap_integrador_app](https://github.com/CoticEaDIFRN/moodle_suap_integrador_app)
* [https://github.com/CoticEaDIFRN/moodle_suap_integrador_ms](https://github.com/CoticEaDIFRN/moodle_suap_integrador_ms)
* [https://github.com/CoticEaDIFRN/moodle_docker_compose](https://github.com/CoticEaDIFRN/moodle_docker_compose)

## Requisitos
* [Docker](https://docs.docker.com/install/)
* [Docker Compose](https://docs.docker.com/compose/install/)
* [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)


## Clone o repositório
```shell
git clone https://github.com/johnt1000/moodle_suap_mockup.git
```

## Uso
Acesse a raiz do projeto:

```shell
cd moodle_suap_mockup
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
