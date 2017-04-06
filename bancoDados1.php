<?php
     class bancoDados {
         
        /*Conecta ao Banco de Dados*/
        public static function fazConexao(){
            $connect = new PDO("odbc:Driver={ODBC Driver 11 for SQL Server};Server=localhost\sqlexpress,59783;Database=CADASTRO;Uid=rafael;Pwd=rafael123");
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connect->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_SYSTEM); 
             return $connect;
         }
       /*Imprimi dados de Pessoa*/
        public static function imprimi($id=0) {
            
            $conn= bancoDados::fazConexao();
           
            try {
            $num_rows="SELECT P.ID,P.RAZAO_SOCIAL, P.NOME_FANTASIA,P.TELEFONE,P.EMAIL,P.NOME,P.ID_ESTADO_CIVIL,EC.DESCRICAO,PF.RG,PF.CPF,PJ.CNPJ FROM PESSOA P LEFT JOIN ESTADO_CIVIL EC ON P.ID_ESTADO_CIVIL = EC.ID LEFT JOIN  PESSOA_FISICA PF ON P.ID=PF.ID LEFT JOIN PESSOA_JURIDICA PJ ON P.ID=PJ.ID".($id ? " WHERE P.ID=".$id :"");
            $stmt=$conn->prepare($num_rows); 
            $stmt->execute();
            $arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch(Exception $e)  
                    {die( print_r( $e->getMessage() ) );   
            }
           return $arr;
        }
        
      
     }       
?>
