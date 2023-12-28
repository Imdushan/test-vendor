<?php

namespace Modularize\Core;

use Kreait\Laravel\Firebase\Facades\Firebase as FirebaseFacade;

class FirebaseConnection
{
    private $database;

    private function __construct()
    {
        $this->database = FirebaseFacade::database();
    }

    public static function getInstance()
    {
        return new self();
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function getFirebase(): \Kreait\Firebase\Database
    {
        return $this->database;
    }
}
