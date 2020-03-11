<?php
class Panier
{
    protected $_session;
    
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }
        $this->_session = &$_SESSION['panier'];
    }
    
    public function ajouter($nom, $prix, $qte = 1, $reduction = 0)
    {
        if (!isset($this->_session[$nom])) {
            $this->_session[$nom] = 0;
        }
        $this->_session[$nom] += ($prix - ($reduction*$prix/100)) * $qte;
    }
    
    public function retirer($nom)
    {
       unset($this->_session[$nom]); 
    }
    
    public function vider()
    {
        $this->_session = array();
    }
    
    public function total()
    {
        return array_sum($this->_session);
    }
}
