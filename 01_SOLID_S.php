<?php
// --- PROBLEMATIQUE
class Contact
{
    protected $forename;
    protected $surname;
    protected $address1;
    protected $city;
    protected $country;
 
    protected function getName()
    {
        return $this->forename . $this->surname;
    }
 
    protected function validate()
    {
        if (strlen($this->forename) < 2)
        {
            return false;
        }
 
        return true;
    }
}

