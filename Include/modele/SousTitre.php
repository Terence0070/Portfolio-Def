<?php
class SousTitre {
    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion;
    }

    public function displayOneSentence() {
        $query = "SELECT texte FROM sous_titre ORDER BY RAND() LIMIT 1";
        $result = $this->connexion->query($query);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['texte'];
        } else {
            return null;
        }
    }
}
?>