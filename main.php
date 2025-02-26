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



class chasis extends Car
{

var $id;
var $total_flaws;
var $chasis_year;

function __construct($id,$brand,$model,$tflaws)
{
  $this->brand = $brand;
  $this->model = $model;
  $this->id = $id;  
  $this->total_flaws =  $tflaws;
  $this->chasis_year = $chasis_year;
}

function set_tflaws($tflaws) {
    $this->total_flaws = $tflaws;
}

function set_id($id){
    $this->id = $id;
}

function set_chasis_year($chasis_year) {
    $this->chasis_year = $chasis_year;
}

function get_id()
{
    return $this->id; 
}

function get_flaws() {
    return $this->total_flaws;
}

function get_chasis_year() {
    return $this->chasis_year;
}

function check_flaws() {
    if ($this->total_flaws > 3){
        echo("Chasis is Not Oporational");
        $this->safety_rating = 0 ;
        $this->safe_to_use = False;
    }
    else{
        echo("Chasis is Oporational");
        $this->safe_to_use = true;
    }

}

function check_chasis_age() {
    if ($this->chasis_year >= 10){
        echo("Chasis too Old.");
        $this->safe_to_use = false;}
    
    else {
        $this->safe_to_use = true;
        echo("Chasis Age Legal");
    }
}

}



class tires extends Car
{
    var $expireyear;
    var $tirecompany;

    function __construct($tirecompany,$expireyear,$brand,$model){
        $this->brand = $brand;
        $this ->model = $model;
        $this ->tirecompany = $tirecompany;
        $this -> expireyear = $expireyear;
    }

    function set_tirecompany($tirecompany) {
        $this->tirecompany = $tirecompany;
    }
    
    function set_expireyear($expireyear){
        $this->expireyear = $expireyear;
    }
    
    function get_expireyear()
    {
        return $this->expireyear; 
    }
    
    function get_tirecompany() {
        return $this->tirecompany;
    }

    function check_tires_date($currentyear) {
        if ($this->expireyear - $currentyear >= 7) {
            $this->safe_to_use = false;
            echo("Tires are Not Safe to Use");
        }
        else {
            $this->safe_to_use = true;
            echo("Tires are Safe to Use");
        }
    }

    function extend_expiredate() {
        $this->expireyear+= 5;
        echo("Tires Gained a 5 Year Extra for Warrenty after Touchup.");
    }
}

?>