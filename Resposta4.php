<?php

$tags = '{}[](),{[()]}(){},{[}(),{)[{()}],;
$termo = '{}[](), {[()]}(){}';

$pattern = '/' . $termo . '/';//Padrão a ser encontrado na string $tags
if (preg_match($pattern, $tags)) {
  echo 'Tag encontrada';
} else {
  echo 'Tag não encontrada';
}

?>
