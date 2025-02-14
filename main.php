<?php
class Car
{
    var $brand;
    var $model;
    var $engine_volume;
    var $year;
    var $safety_rating;
    var $safe_to_use;

    function __construct($brand, $model, $engine_volume, $year, $safety_rating,$safe_to_ride)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->engine_volume = $engine_volume;
        $this->year = $year;
        $this->safety_rating = $safety_rating;
        $this->safe_to_use = $safe_to_ride;
    }

    function get_brand()
    {
        return $this->brand;
    }
    function get_model()
    {
        return $this->model;
    }
    function get_engine_volume()
    {
        return $this->engine_volume;
    }
    function get_year()
    {
        return $this->year;
    }
    function get_safety_rating()
    {
        return $this->safety_rating;
    }

    function set_brand($brand)
    {
        $this->brand = $brand;
    }
    function set_model($model)
    {
        $this->brand = $model;
    }
    function set_engine_volume($engine_volume)
    {
        $this->brand = $engine_volume;
    }
    function set_year($year)
    {
        $this->brand = $year;
    }
    function set_safety_rating($safety_rating)
    {
        $this->brand = $safety_rating;
    }

    function check_rating()
    {
        if ($this->safety_rating==0) {
            $this->safe_to_use = False; }
  
    }
}



class chasis extends car
{
var $id;
var $total_flaws;

function __construct($id,$brand,$model,$date)
{
  $this->brand = $brand;
  $this->model = $model;
  $this->id = $id;  
  $this->total_flaws =  $date;
}

function set_make_date($tflaws) {
    $this->total_flaws = $tflaws;
}

function set_id($id){
    $this->id = $id;
}

function get_id()
{
    return $this->id; 
}

function get_make_date() {
    return $this->total_flaws;
}

function check_flaws() {
    if ($this->total_flaws > 3){
        echo("Chasis is Not Oporational");
        $this->safety_rating = 0 ;
        $this->safe_to_use = False;
    }
    else{
        echo("Chasis is Oporational");
        $this->safe_to_use = True;
    }

}

}
