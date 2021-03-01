# W16 Warker App - API

## Introdução

Este projeto foi pensado e desenvolvido para resolver o caos no mundo pela busca incessante por combustível, use com consciência e que a humanidade possa ter um pouco de paz. 

## Especificação
No mundo pós-apocaliptico de 2021, o combustível tem um valor inestimável. Gangues bárbaras lutam até a morte pelo controle desse valioso recurso e a W16 está desenvolvendo o aplicativo WARKER, que é a última esperança da humanidade em trazer um pouco de paz e ordem à esse mundo devastado.
Esse aplicativo deve consumir uma API REST em Laravel que indica os postos de gasolina das diversas cidades, sua localização e o nível dos seus reservatórios. Lembre-se de que não há mais lei e a sua vida depende do sucesso desse backend. Marcopoc não fica feliz quando o seu app falha devido a erros no backend e você não quer deixar o Marcopoc irritado...

## Requisitos
- PHP >= 7
- Composer
- Node.js

### Instalação:
Siga esta ordem de instalação que não haverão erros.
- composer install
- npm install
- npm run dev
- cp .env.example .env
- Configurar seu banco de dados no arquivo .env
- php artisan migrate

### Login e Registro 
Estão reservadas duas url's para Realizar o cadastro e se logar na Api

```
POST /api/register
{
    name: name,
    email:email,
    password:password
}

POST /api/login
{
    email:email,
    password:password
}

```
Ao realizar o registro ou o login, será fornecido seu Token de acesso que deve ser utilizado como autenticação
para receber todos os dados importantes e sigilosos da nossa aplicação.

No header da sua requisição envie o token em formato Bearer como no exemplo 

```
Authorization -> Bearer 1|rBMEXikGPpU0ZRmHNHPfgVHlkcX1XyJ8ECjIESUS
```

### Para cadastrar Cidades e Postos
POST /api/cidade/
```
{
    id : id,
    nome_da_cidade: nome_da_cidade
    latitude : latitude,
    longitude : longitude
    
}
```

/api/posto/
```
{
    id : id,
    cidade_id:cidade_id,
    reservatorio : reservatorio,
    latitude : latitude,
    longitude : longitude
}
```

## Agradecimentos

Agradecer é importante, então obrigado pela oportunidade e espero que nossa parceria possa acontecer para que o mundo possa prosperar sem caos. 

Abçs

2 DEVS ENTRAM, 1 DEV SAI e Eu sairei vivo !
