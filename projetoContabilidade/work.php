<?php
     require 'config.php';
          $sql= "SELECT * FROM PECLD";
          $datetime1 = new DateTime('07-10-2014');
          $datetime2 = new DateTime('06-10-2014');
          $dedutivel == 'Dedutivel';
          $indedutivel == 'Indedutivel';
              $sql = $pdo->query($sql);
               if($sql->rowCount()>0)
               {
                    foreach($sql->fetchall() as $caso)
                    {
                         $id = $caso['id'];
                         $valorConta = $caso['valorConta'];
                         $vencimento = $caso['vencimento'];
                         $creditoGarantia = $caso['creditoGarantia'];
                         $cobrancaAdm = $caso['cobrancaAdm'];
                         $processoJudicial = $caso['processoJudicial'];

                         //caso 1 da hiposte 1
                         if(($valorConta <= 5000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                         {
                              echo"Dedutivel por H1 "; //teste
                              $hipotese = "1.1";
                              $sql = "UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";

                              //UPDATE table1 set v1 == '$v1', v2 == '$v2', v3 == '$v3', v4 == '$v4' WHERE id = 1
                         }else if(($valorConta <= 5000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                         {
                              echo" Dedutivel por H2"; //teste
                              $hipotese = '1.2';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(($valorConta <= 5000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                         {
                              echo"Dedutivel por H3"; //teste
                              $hipotese = '1.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }
                         else if(($valorConta <= 5000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                         {
                              echo"Dedutivel por H4";//teste
                              $hipotese = '1.4'; 
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         //caso 2 da hiposte 2 
                         }else if(((5000.01 < $valorConta) && ($valorConta <= 30000)) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '2.1';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }else if(((5000.01 < $valorConta) && ($valorConta <= 30000)) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '2.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(((5000.01 < $valorConta) && ($valorConta <= 30000)) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '2.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }
                         else if(((5000.01 < $valorConta) && ($valorConta <= 30000)) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '2.4';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         //caso 3 da hiposte 3
                         }else if(($valorConta > 30000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '3.1';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }else if(($valorConta > 30000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '3.2';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }else if(($valorConta > 30000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '3.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }
                         else if(($valorConta > 30000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '3.4';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         //caso 4 da hiposte 4 
                         }else if(($valorConta > 0) && ($vencimento < $datetime1) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                         {
                         $hipotese = '4.1';
                         $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(($valorConta > 0) && ($vencimento < $datetime1) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '4.2';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }else if(($valorConta > 0) && ($vencimento < $datetime1) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '4.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }
                         else if(($valorConta > 0) && ($vencimento < $datetime1) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '4.4';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         //caso 5 da hiposte 5 
                         }else if(($valorConta <= 15000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '5.1';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(($valorConta <= 15000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '5.2';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(($valorConta <= 15000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '5.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }
                         else if(($valorConta <= 15000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '5.4';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         //caso 6 da hiposte 6 
                         }else if(((15000.01  < $valorConta) && ($valorConta > 100000)) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '6.1';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }else if(((15000.01  < $valorConta) && ($valorConta > 100000)) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '6.2';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(((15000.01  < $valorConta) && ($valorConta > 100000)) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '6.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }
                         else if(((15000.01  < $valorConta) && ($valorConta > 100000)) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '6.4';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         //caso 7 da hiposte 7 
                         }else if(($valorConta > 100000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '7.1';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }else if(($valorConta >  100000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '7.2';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }else if(($valorConta > 100000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '7.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }
                         else if(($valorConta >  100000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '7.4';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         //caso 8 da hiposte 8 
                         }else if(($valorConta <= 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '8.1';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(($valorConta <= 50000 ) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '8.2';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(($valorConta <= 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '8.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }
                         else if(($valorConta <= 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '8.4';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         //caso 9 da hiposte 9
                         }else if(($valorConta > 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '9.1';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(($valorConta > 50000 ) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '9.2';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }else if(($valorConta > 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                         {
                              $hipotese = '9.3';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'";
                         }else if(($valorConta > 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                         {
                              $hipotese = '9.4';
                              $sql ="UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'";
                         }else 
                         {
                              Echo "Erro! Entre em contato com Argos Contabilidade";
                         }
                    }    
               } //end                     
?>