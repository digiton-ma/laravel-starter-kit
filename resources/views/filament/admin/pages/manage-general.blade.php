<x-filament-panels::page>


    <x-filament-panels::form wire:submit="save" @keyup.window.ctrl.s.prevent="$wire.save()">
        {{ $this->form }}

        <x-filament::button type="submit" color="primary">
            {{ __('Save') }}
        </x-filament::button>

    </x-filament-panels::form>

</x-filament-panels::page>
