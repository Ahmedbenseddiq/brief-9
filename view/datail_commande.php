<?php
class Panier{

    
    private $client_id;
    private $etiquette;
    private $img;
    private $offreDePrix;
    private $panier_id;
    private $quantiteStock;
    private $stock;
    private $valid_commend;




    public function __construct($client_id, $etiquette, $img, $offreDePrix, $panier_id, $quantiteStock, $stock, $valid_commend){
        $this->client_id = $client_id;
        $this->etiquette = $etiquette;
        $this->img = $img;
        $this->offreDePrix = $offreDePrix;
        $this->panier_id = $panier_id;
        $this->quantiteStock = $quantiteStock;
        $this->stock = $stock;
        $this->valid_commend = $valid_commend;
    }
}