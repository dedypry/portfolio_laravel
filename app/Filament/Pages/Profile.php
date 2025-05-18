<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Widgets\StatsOverviewWidget;
use Illuminate\Support\Facades\Auth;

class Profile extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.profile';

    protected static bool $shouldRegisterNavigation = false;

    public $profile;
    public ?array $data = [];

    public function mount(): void
    {
        $this->profile = Auth::user()->profile;
        $this->form->fill($this->profile->toArray());
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('photo')
                ->label('Avatar')
                ->disk('public')
                ->directory('avatar')
                ->image()
                ->imageEditor()
                ->maxSize(2048)
                ->acceptedFileTypes(['image/jpeg', 'image/png'])
                ->columnSpanFull(),
            TextInput::make('name')
                ->label('Full Name')
                ->required(),
            TextInput::make('email')
                ->label('Email')
                ->required(),
            TextInput::make('degree')
                ->label('Degree')
                ->required(),
            TextInput::make('phone')
                ->label('No HP')
                ->required(),
            DatePicker::make('birthday')
                ->label('Tanggal Lahir')
                ->native(false)
                ->displayFormat('D, d F Y')
                ->required(),
            TextInput::make('experience')
                ->label('Pengalaman')
                ->numeric()
                ->required(),
            TextInput::make('complete_project')
                ->label('Project Selesai')
                ->numeric()
                ->required(),
            TextInput::make('address')
                ->label('Alamat')
                ->required(),
            TagsInput::make('tags'),
            Checkbox::make('freelance'),

            RichEditor::make('about_me')
                ->disableToolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'strike',
                    'codeBlock',
                    'bulletList',
                    'link',
                    'orderedList',
                ])
                ->columnSpanFull()

        ])
            ->columns(3)
            ->statePath('data')
            ->extraAttributes([
                'x-data' => '{ isLoading: false }',
                'x-on:livewire-upload-start' => 'isLoading = true',
                'x-on:livewire-upload-finish' => 'isLoading = false',
            ]);;
    }

    public function create(): void
    {

        $this->profile->update($this->form->getState());
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }
}
