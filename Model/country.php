<?php

require_once('Helpers/datahandler.php');

class Country
{
    public function __construct()
    {
        $this->dataHandler = new DataHandler();
    }

    public function getAll()
    {
        $query = 'SELECT * FROM country';
        return $this->dataHandler->runSql($query);
    }
}