<?php

use GraphAware\Neo4j\OGM\EntityManager;

require_once 'vendor/autoload.php';

//$entityManager = EntityManager::create('http://localhost:7474');

// bolt://neo4j:password@localhost:7687
$entityManager = EntityManager::create('bolt://neo4j:neo4j_2018@localhost:7687');
