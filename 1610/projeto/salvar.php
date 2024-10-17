<?php
# arquivo salvar.php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_SPECIAL_CHARS);

$texto = '<div>';
$texto .= "Nome: $nome";
$texto .= "<p>$msg</p>";
$texto .= '</div>';

# salavar arquivo de texto;
file_put_contents('mensagens.txt',$texto ."\n\n", FILE_APPEND|LOCK_EX);

# redirecionamento de página
header('Location:index.php');
