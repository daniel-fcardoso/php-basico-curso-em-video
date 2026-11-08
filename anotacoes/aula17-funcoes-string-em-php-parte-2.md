Hoje, vamos continuar nossos estudos sobre string em PHP.

<code>
    <?php
        $nome = "Gustavo Guanabara";
        print("Seu nome e" .strtolower($nome));
    ?>
</code>

<code>
    <?php
        $nome = "Gustavo Guanabra";
        print("Seu nome e" .strtoupper($nome));
    ?>
</code>

<code>
    <?php
        $nome = "gustavo guanabara";
        print("Seu nome e" .ucfirst($nome));
    ?>
</code>

<code>
    <?php
        $nome = "gustavo guanabara";
        print("Seu nome e" .ucwords($nome));
    ?>
</code>

<code>
    <?php
        $nome = "gustavo guanabara";
        print(strrev($nome));
    ?>
</code>

<code>
    <?php
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase,"PHP");
    ?>
</code>

<code>
    <?php
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase,"PHP");
    ?>
</code>

<code>
    <?php
       $frase = "Estou aprendendo PHP no Curso em Video de PHP";
        $cont = substr_count($frase, "PHP");
        print("PHP encontrado $cont vezes");
    ?>
</code>

<code>
    <?php>
        $site = "Curso em Video";
        $sub = substr($site, 0, 5);
        print($sub);
        print(substr($site, 9, 5));
    ?>
</code>

<code>
    <?php
    $nome = "Guanabara";
    $novo = str_pad($nome, 30, " ",STR_PAD_RIGHT);
    print("Meu professor $novo e lindo!);
    ?>
</code>

<code>
    <?php 
        $txt = str_repeat("Php",5);
        print("O texto gerado foi $txt");
        print(str_repeat("-",20));
    ?>
</code>

<code>
    <?php
        $frase = "Gosto de estudar Matematica!!!";
        $novaFrase = str_replace("Matematica", "PHP", $frase);
        print($novaFrase);
    ?>
</code>