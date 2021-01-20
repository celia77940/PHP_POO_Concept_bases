<?php 

/**
 * Objet Compte bancaire
 */
class Compte
{
    // Propriété
    /**
     * Titulaire du compte
     * 
     * @var string
     */
    public $titulaire;

    /**
     * solde de compte
     * 
     * @var float
     */
    public $solde;

    // Méthodes

    /**
     * Constructeur du compte bancaire
     * 
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde à l'ouverture
     */
    public function __construct(string $nom, float $montant = 100)
    {
        //On attribue le nom à la propriété titulaire de l'instance creer 
        $this->titulaire = $nom;

        // On attribue le montant à la propriété solde
        $this->solde = $montant;

    }

    /**
     * Déposer de l'argent sur le compte
     * 
     * @param float $montant Montant déposé
     * @return void
     */

    public function deposer(float $montant)
    {
        // On vérifie si le montant est positif*
        if($montant > 0){
            $this->solde += $montant;
        }

    }

    /**
     * Retourne une chaine de caractères affichant le solde
     * 
     * @return string
     */

    public function voirSolde()
    {
        return "Le solde du compte est de $this->solde euros";
    }

    /**
     * Retire un moment du solde du comtpe
     * 
     * @param float $montant Montant à retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        // On vérifie le montant et le solde
        if($montant > 0 && $this->solde >= $montant){
            $this->solde -= $montant;

        }else{
            echo "Montant invalide au solde insuffisante";
        }
    }



}