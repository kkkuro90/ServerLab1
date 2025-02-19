<?php

namespace App\DTOs;

class InfoDTO {
    public $phpVersion;
    public $serverSoftware;
    public $clientIp;
    public $clientUser Agent;
    public $database;

    public function __construct($phpVersion, $serverSoftware, $clientIp, $clientUser Agent, $database) {
        $this->phpVersion = $phpVersion;
        $this->serverSoftware = $serverSoftware;
        $this->clientIp = $clientIp;
        $this->clientUser Agent = $clientUser Agent;
        $this->database = $database;
    }
}
