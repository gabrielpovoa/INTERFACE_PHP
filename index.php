<?php

//serve unicamente para criar controle de qualidade, já que especificamos tudo que esta sendo usado.

interface DataBase {
    public function listProducts();
    public function addProduct();
    public function readProducts();
    public function updateProduct(); 
    
}

class MysqlDB implements DataBase {
    public function listProducts() {

    }
    public function addProduct(){
        echo "Adding with MySQL";
    }
    public function readProducts() {

    }
    public function updateProduct() {

    }
}

class OracleDB implements DataBase {
    public function listProducts() {

    }
    public function addProduct(){
        echo "Adding with Oracle";
    }
    public function readProducts() {

    }
    public function updateProduct() {

    }
}

class MongoDB implements DataBase {
    public function listProducts(){
        
    }
    public function addProduct(){
        echo "Adding with MongoDB";
    }
    public function readProducts() {

    }
    public function updateProduct() {

    }
}

$db = new MongoDB();
$db->addProduct();



?>