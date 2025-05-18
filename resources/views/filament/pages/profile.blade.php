<x-filament-panels::page>
    <div class="bg-white p-4 rounded-lg shadow-lg" x-data="{ isLoading: false }"
        x-on:livewire-upload-start="isLoading = true" x-on:livewire-upload-finish="isLoading = false">
        <h1 class="font-bold" style="font-size: 25px">Update Profile</h1>
        <hr class="my-2">
        <form wire:submit="create">
            {{ $this->form }}
            <div class="text-right">
                <x-filament::button type="submit" class="mt-2" size="lg" color="success" icon="heroicon-m-sparkles"
                    x-data="{ isLoading: false }" x-on:livewire-upload-start="isLoading = true"
                    x-on:livewire-upload-finish="isLoading = false" x-bind:disabled="isLoading"
                    wire:loading.attr="disabled" wire:target="data.photo">
                    <template x-if="isLoading">
                        <span>Mengupload...</span>
                    </template>
                    <template x-if="!isLoading">
                        <span>Simpan</span> </template>
                </x-filament::button>
            </div>
        </form>
    </div>

</x-filament-panels::page>
