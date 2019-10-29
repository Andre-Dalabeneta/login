# login
Sistema de login em PHP e Javascript

# aula10 - 29/10/2019

# aula09 - 23/10/2019

# aula08 - 21/10/2019

# aula07 - 18/10/2019
- Início da autenticação e entrada no sistema

# aula06 - 15/10/2019
Persistência de dados no banco de dados

# aula05 - 04/10/2019
Envio de dados do Front-end para o Back-end, métodos GET e POST.

# aula04 - 01/10/2019
- Validação com HTML5
- Validação dos campos com jQuery validate

# aula03 - 30/09/2019
- Formulário de Cadastro de novos usuários
- ~Validação dos campos com jQuery validate~
- Ocultar e mostrar os formulários com jQuery

jQuery é uma biblioteca de funções javascript.

# aula02 - 24/09/2019
Layout Bootstrap para os formulários
 - Formulário de login
 - Formulário de recuperação de senha
 - ~Formulário de Cadastro de novos usuários~

# aula01 - 23/09/2019
(= Começou a primavera =)
Aula inicial, configuração do projeto no Github.
E criação do passo a passo.

---
# Passo a passo em todo início de aula 

## Habilitar o Proxy
  Tecla Windows - Abrir a janela Prompt de Comando
  Copie e cole a linha abaixo - selecione e pressione as teclas Ctrl C

  git config --global http.proxy http://10.1.21.254:3128
  
  Cole no Prompt de Comando e
  Pressione Enter
  
## Clonar o repositório **login** na pasta **c:/xampp/htdocs**
  - Tecla Windows - Abrir o Github Desktop
  - Clique em *Sign in to Github.com*
  - Digite seu login e senha do Github
  - Caso necessário, após o login, digite seu nome e e-mail e clique em *Continue*
  - Selecione o repositório **login** e logo abaixo clique no botão azul *Clone...*
  - Clique no botão *Choose* e encontre no disco local C:a pasta xampp e dentro dela htdocs
  - Selecione a pasta e confira se o *local path* foi *C:\xampp\htdocs\login*
  - Clique no botão azul *Clone*
    
## Habilitar o servidor web **Apache** e o servidor **MySQL**
  - Tecla Windows - Abrir o XAMPP Control Panel
  - Clique em Start para o Apache
  - Clique em Start para o MySQL
  - Verifique se apareceu a porta 80 Apache e 3306 MySQL
  - Verifique se ficou verde o Apache e MySQL
  
## Testar se está funcionando
  - Abra o navegador Firefox azul e digite http://localhost/login
  
  ## Editar utilizando o VS Code
  -Tecla Windows - Abrir o Visual Studio Code (é o azul)
  - *Abrir Pasta* no VS Code escolha C:\xampp\htdocs\login
  
## Importar o banco de dados
  - Acessar no navegador http://localhost/phpmyadmin
  - Clicar em importar 
  - Selecionar o arquivo, clicando em Browse ou escolha o arquivo
  - Abra o arquivo 127.0.0.1
  - O banco deve ter sido importado corretamente
