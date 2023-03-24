# InteriorDesign


#### Live Preview - [Interior Design](https://felipechagas.tk/InteriorDesign/)

---

<img src="display.png" />

---

## Visão geral

1. Utilizando arquitetura MVC.
2. Integrado com banco de dados.
3. Responsivo.
4. Validação de campos de formulário.
5. Single-page application, utlizando Ajax para evitar carregamentos ao enviar dados para o back-end.


---

# Instalalação

### Instalalação

1. Instale o XAMPP ou qualquer outro pacote que permita você rodar um servidor local com suporte a PHP e MySQL. Se você já possuir algum pacote de servidor no seu sistema **pule essa etapa**.

    **[XAMPP](https://www.apachefriends.org/pt_br/download.html)**

 
2. Abra o painel de controle do XAMPP e inicie os serviços **apache** e **mysql**.


3. Faça o download do projeto (https://github.com/Felipebchagas/teste-frontend-developer/archive/refs/heads/master.zip)

4. Crie uma pasta em **C:\xampp\htdocs** com o nome de `InteriorDesign` e então descompacte os arquivos dentro dela.

5. Acesse o seu SGBD, caso não tenha, acesse o PHPMyAdmin no navegador por esse link: **localhost/phpmyadmin.** 

    - Por padrão o Username/Usuário é **root** e Password/Senha você não precisa informar.
    
    - Faça login no PHPMyAdmin com os dados informados, e em seguida clique em **SQL**


    - Copie e cole o código abaixo. Feito isso clique em **continuar** para executar e dessa forma criar o banco de dados com a tabela.

        ```
        CREATE DATABASE Interior;

        USE Interior;

        CREATE TABLE users (
          id INT NOT NULL AUTO_INCREMENT,
          name VARCHAR(255) NOT NULL,
          email VARCHAR(255) NOT NULL,
          phone VARCHAR(20) NOT NULL,
          subject VARCHAR(255) NOT NULL,
          status BOOLEAN DEFAULT FALSE,
          created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
          updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (id)
        );
        
        ```

    ---

     #### Caso não tenha conseguido criar o banco de dados com o comando acima, você pode importar o arquivo `interior.sql` que se encontra no diretório                         `database\migrations` do projeto.

    ---

6. Navegue até o projeto e abra o arquivo `env.php`.  

    - Talvez você precise modificar alguns dados sobre o banco de dados aqui, caso não tenha necessidade **pule essa etapa**.

        ```
        const HOST = 'localhost';   <!-- **** o host do server, por padão `localhost` **** -->
        const DB = 'interior';      <!-- **** o nome da tabela que criamos no passo 5 **** -->
        const USER = 'root';        <!-- **** o usuário de acesso do banco de dados **** -->
        const PASSWORD = '';        <!-- **** a senha de acesso do banco de dados **** -->
        ```
    ---
    
---

> **A instalação termina aqui e você já deve ser capaz de rodar o projeto [Acesse](http://localhost/InteriorDesign)**

---    




