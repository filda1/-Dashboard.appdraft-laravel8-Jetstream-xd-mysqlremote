<x-jet-form-section submit="createTeam">
    <x-slot name="title">
        {{ __('Team Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new team to collaborate with others on projects.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            <x-jet-label value="{{ __('Team Owner') }}" />

            <div class="flex items-center mt-2">
                <img class="object-cover w-12 h-12 rounded-full" src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}">

                <div class="ml-4 leading-tight">
                    <div>{{ $this->user->name }}</div>
                    <div class="text-sm text-gray-700">{{ $this->user->email }}</div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Team Name') }}" />
            <x-jet-input id="name" type="text" class="block w-full mt-1" wire:model.defer="state.name" autofocus />
            <x-jet-input-error for="name" class="mt-2" />
        </div>
        <!------ Server db ------>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="serverdb_name" value="{{ __(' ServerDB Name') }}" />
            <x-jet-input id="serverdb_name" type="text" class="block w-full mt-1" wire:model.defer="state.serverdb_name" autofocus />
            <x-jet-input-error for="serverdb_name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="serverdb_alias" value="{{ __(' ServerDB Alias') }}" />
            <x-jet-input id="serverdb_alias" type="text" class="block w-full mt-1" wire:model.defer="state.serverdb_alias" autofocus />
            <x-jet-input-error for="serverdb_alias" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="serverdb_ip" value="{{ __(' ServerDB IP') }}" />
            <x-jet-input id="serverdb_ip" type="text" class="block w-full mt-1" wire:model.defer="state.serverdb_ip" autofocus />
            <x-jet-input-error for="serverdb_ip" class="mt-2" />
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="serverdb_user" value="{{ __(' ServerDB User') }}" />
            <x-jet-input id="serverdb_user" type="text" class="block w-full mt-1" wire:model.defer="state.serverdb_user" autofocus />
            <x-jet-input-error for="serverdb_user" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="serverdb_password" value="{{ __(' ServerDB Password') }}" />
            <x-jet-input id="serverdb_password" type="text" class="block w-full mt-1" wire:model.defer="state.serverdb_password" autofocus />
            <x-jet-input-error for="serverdb_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="serverdb_db" value="{{ __(' ServerDB Database') }}" />
            <x-jet-input id="serverdb_db" type="text" class="block w-full mt-1" wire:model.defer="state.serverdb_db" autofocus />
            <x-jet-input-error for="serverdb_db" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="serverdb_port" value="{{ __(' ServerDB Port') }}" />
            <x-jet-input id="serverdb_port" type="number" class="block w-full mt-1" wire:model.defer="state.serverdb_port" autofocus />
            <x-jet-input-error for="serverdb_port" class="mt-2" />
        </div>
        
        <!------ Close Server db ------>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            {{ __('Create') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
