<?php

namespace App\Lib;

class Model
{
    protected $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }
}