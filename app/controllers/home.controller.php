<?php

class HomeController extends Controller {

    public function index() {
        // fetch data from the home model
        $model = $this->model("home");
        $data = $model->getData();

        // render the home view
        $this->view("home", $data);
    }
}