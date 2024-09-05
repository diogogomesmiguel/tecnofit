<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tecnofit - Desafio técnico



Partindo do pressuposto, que a maquina tenha o PHP, MySQL, Composer e Insomnia instalado, seguiremos para iniciar o projeto.

- Primeiro iremos criar um novo banco de dados, com o nome `tecnofit`.

- No arquivo `.env`, tem que configurar o usuário e a senha do seu banco local, para conectar ao banco.
  Deixei demarcado no arquivo .env, onde inicia as configurações do banco.

  - Rodar o comando para instalar as dependencias: `composer install`
  - Rodar o comando para gerar o APP_KEY do Laravel: `php artisan key:generate`

- Após criar o banco e configurar o acesso, iremos rodar alguns comandos para popular o banco:
  - Rodar os seguintes comandos:
    - `php artisan migrate --seed`

Após isso, podemos testar o projeto.

- Temos que rodar o comando `php artisan serve`, clicar com o Ctrl pressionado na url, para abrir
  no navegador, se abrir a página do laravel é que deu tudo certo.

Agora precisamos gerar um token para acessarmos a API.

- No Insomnia crie uma nova requisição do tipo POST com "URLLOCAL/api/login".
- No Body selecione Json e cole o código: `{"email": "diogo@gmail.com","password": "123456789"}`
- No Header adicione uma nova linha em Add e atribua `Accept` na coluna da esquerda e `application/json` na da direita. Depois é só clicar em Send.
- Copiar o token que irá retornar.

Agora podemos realizar uma consulta:
 - No Insomnia crie uma nova requisição do tipo GET com `URLLOCAL/api/record-movement/IDdoMovement`
 - No Auth, selecione ´Bearer Token´, e no campo token, cole o token copiado.
 - No Header adicione uma nova linha em Add e atribua `Accept` na coluna da esquerda e `application/json` na da direita. Depois é só clicar em Send.
   *Os is's são: `1 = Deadlift, 2 = Back Squat e 3 = Bench Press`.*



 
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# tecnofit" 
