Ligação formulário HTML PHP, integração HTML5 com PHP via formulário.

Nessa oitava aula do Curso de PHP, vamos aprender como aumentar a interatividade dos nossos scripts PHP com formulários HTML5.

Formulários em HTML5

Se você não sabe como lidar com formulários HTML5, não se esqueça de assistir antes as duas aulas que tratam desse assunto no Curso em Vídeo Grátis de HTML5.

Formulários HTML5 – Parte 1: http://youtu.be/metoFY-x_yg

Formulários HTML5 – Parte 2: http://youtu.be/lwuDJN9Udfc

Formulários HTML5 e JavaScript: http://youtu.be/YY5hqlcbfoI

Lá você vai aprender como escrever códigos específicos para a criação de formulários completos e vai estudar todos os novos controles de formulários adicionados ao HTML5, como o range, color, number, date, etc.

Por exemplo, vamos considerar um formulário que use o método GET e envie um valor V para o arquivo DADOS.PHP:

Obs: O método GET envia dados de um formulário diretamente pela URL.

Interligando o formulário HTML com o script PHP

Para interligar o formulário, vamos usar a cláusula $_GET

<?php

     $valor = $_GET[“v”];

     echo “Digitou $valor”;

?>

Obs: O $_GET sempre vai utilizar todas as letras maiúsculas. Obs: Se por acaso seu formulário utilizar o método post, você vai precisar usar $_POST.

Interligando outros tipos de controles de formulários HTML5 com PHP

A integração de qualquer controle de formulário PHP pode ser feita através do parâmetro NAME de cada um deles. Durante a aula, criamos um formulário com vários tipos de controles e interligamos eles ao arquivo PHP.

Pegando o ano atual com PHP Para obter o ano atual no PHP, utilizamos

$idade = date(“Y”) – $ano;