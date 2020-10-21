<?php

namespace AppBundle\Common;

final class AgrochemicalTypes{
    
    public static function getChoices(){
        return [
            1001 => "Fertilizante",
            1002 => "Herbicidas",
            1003 => "Fungicidas",
            1004 => "Insecticidas",
            1005 => "Fitoreguladores"
        ];
    }
}

