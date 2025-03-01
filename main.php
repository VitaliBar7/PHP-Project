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

    function get_safe_to_use(){
        return $this ->safe_to_use;
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



class Chasis extends Car
{

var $id;
var $total_flaws;
var $chasis_year;

function __construct($id,$tflaws,$chasis_year, Car $car)
{
  $this -> brand = $car -> get_brand();
  $this -> engine_volume = $car -> get_engine_volume();
  $this -> year = $car -> get_year();
  $this -> safe_to_use = $car -> get_safe_to_use();
  $this ->model = $car -> get_model();
  $this ->safety_rating = $car -> get_safety_rating();
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

function check_chasis_age($curryr) {
    if (( $curryr - $this->chasis_year) >= 10){
        echo("Chasis too Old.");
        $this->safe_to_use = false;}
    
    else {
        $this->safe_to_use = true;
        echo("Chasis Age Legal");
    }
}

}



class Tires extends Car
{
    var $expireyear;
    var $tirecompany;

    function __construct($tirecompany,$expireyear, Car $car){

        $this -> brand = $car -> get_brand();
        $this -> engine_volume = $car -> get_engine_volume();
        $this -> year = $car -> get_year();
        $this -> safe_to_use = $car -> get_safe_to_use();
        $this -> model = $car -> get_model();
        $this ->safety_rating = $car -> get_safety_rating();
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
        if ($this->get_expireyear() <= $currentyear) {
            $this->safe_to_use = false;
            echo("Tires are Not Safe to Use");
        }
        else {
            $this->safe_to_use = false;
            echo("Tires are Safe to Use");
        }
    }

    function extend_expiredate() {
        $this->expireyear+= 5;
        echo("Tires Gained a 5 Year Extra for Warrenty after Touchup.");
    }
}


class Brakes extends Car
{
    var $requireInspection;
    var $yearsActive;
    var $brakeRating;

    function __construct($requireInspection,$yearsActive,$brakeRating,Car $car)
    {
        $this -> brand = $car -> get_brand();
        $this -> engine_volume = $car -> get_engine_volume();
        $this -> year = $car -> get_year();
        $this -> safe_to_use = $car -> get_safe_to_use();
        $this -> model = $car -> get_model();
        $this -> safety_rating = $car -> get_safety_rating();
        $this -> requireInspection = $requireInspection;
        $this -> yearsActive = $yearsActive;
        $this -> brakeRating = $brakeRating;
    }

    function set_requitreInspection($reqIns) {
        $this->requireInspection = $reqIns;
    }
    
    function set_YearsActive($yrsActv){
        $this->yearsActive = $yrsActv;
    }

    function set_brakeRating($brkRtng){
        $this->brakeRating = $brkRtng;
    }
    
    function get_reqInspection()
    {
        return $this->requireInspection; 
    }
    
    function get_yrsActiv() {
        return $this->yearsActive;
    }

    function get_brkRtng() {
        return $this->brakeRating;
    }

    function testBrakes(){
        if ($this-> get_brkRtng() < 50) {
            $this -> get_reqInspection(true);
        }
    }

    function replaceBrakes(){
        if($this->get_reqInspection() == true){
            $this->set_YearsActive(0);}
        else {
            echo"The Following Car Do Not Require Brake Replacment";
        }
        }
    }



$C1 =  new Car('Ford', 'Focus' ,1.6 , 2021 , 5 , true);

$C2 = new Car('Mazda' , 'CX-3' , 2000 , 2022 , 4 , true);

$C3 = new Car('Chevrolet', 'Malibu' , 2.5 , 2025 , 5 , true);

$C4 = new Car('Suzuki' , 'Cross' , 1.6 , 2021 , 3 , true);

$CASC1 = new Chasis('4FRF771', 3 , 2009 , $C1);

$CASC2 = new Chasis('6MZE1299', 0 , 2022 , $C2);

$TIRC1 = new Tires ('Michlin', 2028 , $C1);

$TIRC2 = new Tires ('Toyo', 2023 , $C2);

$BRC3 = new Brakes (false, 3 , 67 , $C3);

$BRC4 = new Brakes (true, 5 , 49 , $C4);


print_r($CASC1); //Chasis Class 1 Obj

//print ($CASC1->check_chasis_age(2024)); //Chasis Function Demo

print("<br>");

print("<br>");

print_r($CASC2); //Chasis Class 2 Obj

print("<br>");

print("<br>");

print_r($TIRC1); //Tires Class 1 Obj

print("<br>");

print("<br>");

print_r($TIRC2); //Tires Class 2 Obj

//print($TIRC2->check_tires_date(2024)); //Tires Function Demo

print("<br>");

print("<br>");

print_r($BRC3); //Brake Class 1 Obj

print("<br>");

print("<br>");

print_r($BRC4); //Brake Class 2 Obj



?>