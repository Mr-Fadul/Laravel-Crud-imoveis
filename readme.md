# Crud de imóveis em Laravel

Olá, esse é um Crud simples feito em Laravel, fique livre para usar em seus estudos!


# Instalação

Clone o repositório em sua maquina, execute os comandos de instalação do **composer** e do **npm**

 - composer install
 - npm install

## Adicione suas credenciais ao arquivo .Env
DB_CONNECTION=mysql   ***-- tipo do seu banco de dados***
DB_HOST=127.0.0.1  ***-- o ip de instalação***
DB_PORT=3306  ***-- a porta***
DB_DATABASE=homestead ***-- o nome do banco***
DB_USERNAME=homestead  ***-- o usuário, geralmente é root***
DB_PASSWORD=secret ***-- a senha do banco, em local host costuma estar vazia.***
## Analise as classes e crie as tabelas no seu SGBD
-- Estrutura da tabela `properties`
DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rental_price` decimal(11,2) NOT NULL,
  `sale_price` decimal(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

## Pronto agora pode desfrutar do CRUD como base em seus projetos.

