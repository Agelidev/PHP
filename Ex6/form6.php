<?php
if(isset($_REQUEST['enviar'])){
        echo "<p><h2>Dados do formulário</h2> <hr> </p>";
        echo "Nome : {$_REQUEST['nome']} </br>";
        echo "Comentário : {$_REQUEST['comentario']}</p><hr>";
                }else{
                        echo "<h2>Formulário</h2>
                        <form name='informacoes'  method='POST' action=#>
                        Informe seu nome:  <input name='nome' type='text'>
                        <br/>
                        <br/>
                        <p>Escreva um comentário:</p>
                        <textarea name='comentario' rows='3' cols='25'></textarea>
                        <br/>
                        <br/>
                        <input name='enviar' type='submit' value='Enviar'>
                        </form>";
                        }
?>