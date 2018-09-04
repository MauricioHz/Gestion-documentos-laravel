<?php

namespace App;

use DateTime;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';

    public $timestamps = false;

    protected $appends = ['diasTranscurridos'];
    public function getTagTranslatedAttribute()
    {
        //$this->fechaVencimiento->diff($this->fechaInicio);

        $fecha2 = new DateTime($this->fechaInicio);
        $fecha1 = new DateTime($this->fechaVencimiento);
        //$resultado = $fecha1->diff($fecha2);
        //$var = 1 + 1;
        //return 'the translated tag ' . $var;
        //$fecha1 = new DateTime('2009-10-11');
        //$fecha2 = new DateTime('2009-10-13');
        $resultado = $fecha1->diff($fecha2);
        return $resultado->format('%R%a días x');
    }

}
