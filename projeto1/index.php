<html>
<!--
- Passo 1 - Baixe o xampp no caminho: C:
- Passo 2 - Crie uma pasta no C: -> Dentro da pasta crie uma pasta ‘index.php’
- Passo 3 - Vá na pasta: xamp-control.exe
- Passo 4 - No xampp no ‘apache’ clique em ‘config’ - ‘apache (httpd.conf)’ - procure por ‘documentroot’

- Passo 5 - Nas linhas encontradas mude o caminho para o caminho do seu projeto:
DocumentRoot “C:/nomedapasta”
<Directory “C:/nomedapasta”>

- Passo 6 - Inicialize o apache - coloque um código dentro
-->
    <head>
    <title>Meu primeiro site em PHP!</title>
    <script src="htpps://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style type="text/css">
        .linha {
            font-weight: bold;
            color: green;
            padding-left: 10px;
            line-height: 50px;
        }
    </style>
    </head>
    <body>
        <?php
            for ( $i = 0 ; $i < 10 ; $i++ ) (
                print( "span class=\"linha\">Linha número " . $i . "br />");
            )
        ?>
    </body>
    <script type="text/javascript">
        $ (document).ready(function()) {
            alert("O programa deu certo!")
        });
    </script>
</html>