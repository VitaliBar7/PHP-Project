<?php
class Car
{
    var $brand;
    var $model;
    var $engine_volume;
    var $year;
    var $safety_rating;

    function __construct($brand, $model, $engine_volume, $year, $safety_rating)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->engine_volume = $engine_volume;
        $this->year = $year;
        $this->safety_rating = $safety_rating;
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
}
