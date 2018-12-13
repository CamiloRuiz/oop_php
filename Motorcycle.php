<?php
/**
 * Class Motorcycle
 */

class Motorcycle
{
    var $model;
    var $color;
    var $company;

    function __construct($model, $color, $company)
    {
        $this->model   = $model;
        $this->color   = $color;
        $this->company = $company;
    }

    function startEngine()
    {
        return 'Se ha encendido la motocicleta';
    }

    function speedUp()
    {
        return "Acelerando";
    }
}

$ktm = new Motorcycle('Duke 690', 'Black', 'KTM');
