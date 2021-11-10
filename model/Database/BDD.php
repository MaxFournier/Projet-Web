<?php
	class BDD
{
    // déclaration d'une propriété
    private $bdd ;
	private $pdo;


    public function __construct()
    {
		createDatabaseConnection();
    }


    function __destruct() {
        closeDatabaseConnection();
    }

	function createDatabaseConnection(){
		try {
            $this->pdo = new PDO("DB_TYPE:DB_NAME");
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
	}

	function closeDatabaseConnection(){
		$this->pdo = null;
	}


   
	
  
}

?>
