<?php
    require_once "controller/index.php";

    header("Content-Type: application/json");
    
    $data = [];

    $fn = $_REQUEST["fn"];
    $id = $_REQUEST["id"] ?? 0;
    $name = $_REQUEST["name"] ?? "anonimous";
    $type = $_REQUEST["type"] ?? null;
    $year = $_REQUEST["year"] ?? null;
    $description = $_REQUEST["description"] ?? null;

    die(json_encode($data));