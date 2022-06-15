<?php
class Banco{

    private $pdo;
    private $numRows;
    private $array;

    public function __construct($host,$dbname, $user, $pass)
    {
       try {
            $this->pdo = new PDO ("mysql:dbname=".$dbname.";host=".$host, $user, $pass);

       } catch(PDOException $e){
            echo "Erro".$e->getMessage();
       }
    }

    public function query($sql) {

        $query = $this->pdo->query($sql);
        $this->numRows = $query->rowCount();
        $this->array = $query->fetchAll(); 
    }

    public function result(){
        return $this->array;
    }

    public function numRows() {
        return $this->numRows;
    }
}

?>