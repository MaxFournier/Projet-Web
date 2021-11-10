<?php
	class BDD
{
    // déclaration d'une propriété
    private $bdd ;
	private $pdo;


    public function __construct()
    {
		//nom+emplacement fichier database squlite3
    	$this->bdd = "database.db";

    }

	public function getBdd ()
	{
		return $this->bdd;
	}

	public function setBdd ($bdd)
	{
		$this->bdd = $bdd;
	}

    public function accesBdd()
    {
    	$bdd = $this->bdd;

    	$this->pdo = new PDO("sqlite:$bdd");
    }

   
	
  
}

?>
