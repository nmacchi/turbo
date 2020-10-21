<?php

namespace AppBundle\Common;

final class FuelTypes{
    
    public static function getChoices(){
        return [
            1001 => "Gas-Oil",
            1002 => "Nafta"
        ];
    }
}

