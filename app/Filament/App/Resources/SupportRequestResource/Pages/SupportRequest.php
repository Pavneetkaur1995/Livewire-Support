<?php

namespace App\Filament\App\Resources\SupportRequestResource\Pages;

use App\Filament\App\Resources\SupportRequestResource;
use Filament\Resources\Pages\Page;

class SupportRequest extends Page
{
    protected static string $resource = SupportRequestResource::class;

    protected static string $view = 'filament.app.resources.support-request-resource.pages.support-request';

    public function getViewData(): array{
        return $data;
    }
    
}
