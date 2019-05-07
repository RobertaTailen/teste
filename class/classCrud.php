<?php 
include("classConexao.php");
class ClassCrud extends ClassConexao{
    
    #Atributos
    public $Crud;
    private $Contador;
    private $Resultado;

    #Preparação das declativas public function preparedStatements($Query, $Tipos , $Parametros)
    public function preparedStatements($Query , $Parametros)
    {
        
        $this->countParametros($Parametros);
        $Con=$this->conectaDB();
        $this->Crud=$Con->prepare($Query);
        

        if($this->Contador > 0){
            for($I=1; $I <= $this->Contador; $I++){
                $this->Crud->bindValue($I,$Parametros[$I-1]);
            }
        }

        $this->Crud->execute();

    }

    #Contador de parâmetros
    private function countParametros($Parametros)
    {
        $this->Contador=count($Parametros);
    
    }
    #Inserção no Banco de Dados
    public function insertDB($Tabela , $Condicao , $Parametros){
       $this->preparedStatements("insert into {$Tabela} values ({$Condicao})" , $Parametros);
       return $this->Crud;
    }
}