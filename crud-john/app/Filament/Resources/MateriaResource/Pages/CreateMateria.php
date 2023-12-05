<?php

namespace App\Filament\Resources\MateriaResource\Pages;

use App\Filament\Resources\MateriaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMateria extends CreateRecord
{
    protected static string $resource = MateriaResource::class;

    //redireccionar al index al crear una materia
    protected function getRedirectUrl():string
    {   
        return $this->getResource()::getUrl('index');
    }
}
