O PHP permite a criação de condicões. Nessa aula, veremos como utilizar a estrutura IF.

A estrutura condicional em PHP é representada da seguinte forma:

if ($idade = 18) {

     $vota = true;

} else {

    $vota = false;

}

Estruturas condicionais aninhadas

Quando colocamos uma condicional dentro da outra, dizemos que estamos aninhando estruturas (termo que se refere a ninho). Para aninhar blocos, utilizamos uma sintaxe semelhante à anterior:

if ($peso 50) {

    $tipo = “muito magro”;

} else {

    if ($peso =50 && $peso 70) {

          $tipo = “peso normal”;

     } else {

        $tipo = “acima do peso”;

     }

}

Simplificando estruturas condicionais aninhadas

No PHP, podemos substituir uma cláusula else seguida de outro if (como feito acima) por uma estrutura elseif {} que vai se comportar exatamente da mesma maneira, mas usará menos blocos.

if ($tipo == “nacional”) {

     $imposto = 0;

} elseif ($tipo == “importado”) {

     $imposto = 60;

} elseif ($tipo == “mercosul”) {

     $imposto = 20;

} else {

     $imposto = 80;

}