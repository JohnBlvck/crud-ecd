<?php

namespace App\Filament\Resources\AlumnoResource\Pages;

use App\Filament\Resources\AlumnoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAlumno extends CreateRecord
{
    protected static string $resource = AlumnoResource::class;

    //redireccionar al index al crear un alumno
    protected function getRedirectUrl():string
    {   
        return $this->getResource()::getUrl('index');
    }

}
