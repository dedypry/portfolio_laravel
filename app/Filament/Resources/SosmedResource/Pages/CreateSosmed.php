<?php

namespace App\Filament\Resources\SosmedResource\Pages;

use App\Filament\Resources\SosmedResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreateSosmed extends CreateRecord
{
    protected static string $resource = SosmedResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $profileId = Auth::user()->profile->id;
        $data['profile_id'] = $profileId;
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
