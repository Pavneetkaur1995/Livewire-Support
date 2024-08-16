<?php

namespace App\Filament\App\Resources\SupportResource\Pages;

use App\Filament\App\Resources\SupportResource;
use Filament\Resources\Pages\Page;

class Support extends Page
{
    protected static string $resource = SupportResource::class;

    protected static string $view = 'filament.app.resources.support-resource.pages.support';
}
