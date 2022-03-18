<?php
//require_once('Model/');

class Countries {
    public function __construct()
    {
        //$this->fruitModel = new Fruit();
    }


    public function index()
    {
        foreach($countries as $country)
        {
            ?>
        <div>
            <?= $country['name'] ?>
        </div>
            <?php
        }
    }

    public function handleRequest()
    {
        switch($_REQUEST['action'] ?? '')
        {
            default:
                //$this->readAllFruits();

        }
    }

    public function readAllCountries()
    {
        //$fruits = $this->fruitModel->getAll();
        //include('View/');
    }
}


?>