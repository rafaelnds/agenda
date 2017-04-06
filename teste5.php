<html>
   
   <head>
      <title>Tela Pessoa</title>
   </head>
   
   <body>
      
      <?php
      require("bancoDados.php");
      echo 'OLÁ!';
         echo '<form method="post">';
            echo'<h1>Tabela de Pessoas Cadastradas</h1>';
            echo "<table border='3'><tr><th></th><th>ID</th><th>Nome</th><th>Telefone</th><th>Nome fantasia</th><th>Razao Social</th><th>EMAIL</th><th>Estado Civil</th><th>CPF</th><th>RG</th><th>CNPJ</th></tr>";
            $array=bancoDados::imprimi();
             for($i=0;$i<count($array); $i++){
                error_log($array[$i]['ID']);
                $pnome=$array[$i]['NOME'];  
                $id = $array[$i]['ID'];	
                $ec=$array[$i]['DESCRICAO'];
                $empresa = $array[$i]['NOME_FANTASIA']; 
                $razao = $array[$i]['RAZAO_SOCIAL'];
                $telefone = $array[$i]['TELEFONE'];
                $email = $array[$i]['EMAIL'];
                $cpf = $array[$i]['CPF'];
                $rg = $array[$i]['RG'];
                $cnpj = $array[$i]['CNPJ'];
           echo "<tr><td>$id</td><td>$pnome</td><td>$telefone</td><td>$empresa</td><td>$razao</td><td>$email</td><td>$ec</td><td> $cpf </td><td> $rg </td><td>$cnpj</td></tr>";
          
        }  
        
        echo "</table>";
        echo '</form>';
      ?>
      
   </body>
</html>	