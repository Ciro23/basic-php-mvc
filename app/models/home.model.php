<?php

class HomeModel extends Model {

    // hardcoded data to simulate the db
    protected $data = [
        "1" => "one",
        "2" => "two",
        "3" => "three"
    ];

    public function getData() {
        // in a real situation the Model::executeStmt() method must be called in order to fetch data to database
        return $this->data;
    }
}