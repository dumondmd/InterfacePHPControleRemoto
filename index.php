<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Controle Remoto</title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            
            $c->maisVolume();
            
            $c->play();
            $c->abrirMenu();
            ?>
        </pre>
    </body>
</html>
