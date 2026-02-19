<?php





class CompteBancaire {
    private string $titulaire;
    private float $solde;

    public function __construct( string $titulaire, float $soldeInitiale = 0)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitiale;

    }


    public function getSolde() :float{
        return $this->solde;
    }   

    public function afficherSolde() :string{
         return("Your solde is $this->solde$");
    }


    public function deposer(float $montant) :void{
        if($montant > 0){
            $this->solde += $montant;
        }
    }

    public function retirer(float $montant) :bool{
        if($this->solde >= $montant){
            $this->solde - $montant;
            return true;
        }else{
            return false;
        }
    }
}