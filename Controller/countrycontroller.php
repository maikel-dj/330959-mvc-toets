<?php
require_once('../Model/country.php');

class CountryController {
    public function __construct()
    {
        $this->countryModel = new Country();
    }

    public function handleRequest()
    {
        switch($_REQUEST['action'] ?? '')
        {
            default:
                $this->readAllCountries();

        }
    }

    public function readAllCountries()
    {
        $countries = $this->countryModel->getAll();
        include('../View/country.php');
    }
}


?>