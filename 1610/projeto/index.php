<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style .css">
</head>
<body>
    <div class="container">
        
        <form action="salvar.php" method="post">
            <input required type="text" name="nome" id="nome" placeholder="Nome">
            <input required type="text" name="msg" id="msg" placeholder="Mensagem">
            <input type="submit" value="enviar">
        </form>
        <div class="mensagem">
            <?=file_get_contents('mensagens.txt');?>
        </div>
    </div>
    
</body>
</html>