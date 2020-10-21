<?php

namespace AppBundle\Common;


final class CropTypes{
      
    public static function getChoices(){
        return [
            1001 => "Soja",
            1002 => "Maiz",
            1003 => "Trigo",
            1004 => "Girasol",
            1005 => "Sorgo",
            1006 => "Centeno",
            1007 => "Cebada",
            1008 => "Avena",
            1009 => "Lino",
            1010 => "Mijo"
        ];
    }
}
