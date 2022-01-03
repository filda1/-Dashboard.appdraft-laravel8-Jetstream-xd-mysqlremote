<x-jet-form-section submit="updateTeamName">
    <x-slot name="title">
        {{ __('Team Name') }}
    </x-slot>

    <x-slot name="description">
        {{ __('The team\'s name and owner information.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Team Owner Information -->
        <div class="col-span-6">
            <x-jet-label value="{{ __('Team Owner') }}" />

            <div class="flex items-center mt-2">
                <img class="object-cover w-12 h-12 rounded-full" src="{{ $team->owner->profile_photo_url }}" alt="{{ $team->owner->name }}">

                <div class="ml-4 leading-tight">
                    <div>{{ $team->owner->name }}</div>
                    <div class="text-sm text-gray-700">{{ $team->owner->email }}</div>
                </div>
            </div>
        </div>

        <!-- Team Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Team Name') }}" />
            
            <x-jet-input id="name"
                        type="text"
                        class="block w-full mt-1"
                        wire:model.defer="state.name"
                        :disabled="! Gate::check('update', $team)" />

            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Server DB Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('ServerDB Name') }}" />
            
            <x-jet-input id="serverdb_name"
                        type="text"
                        class="block w-full mt-1"
                        wire:model.defer="state.serverdb_name"
                        :disabled="! Gate::check('update', $team)" />

            <x-jet-input-error for="name" class="mt-2" />
        </div>
        
        <!-- ServerDB Alias -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('ServerDB Alias') }}" />
            
            <x-jet-input id="serverdb_alias"
                        type="text"
                        class="block w-full mt-1"
                        wire:model.defer="state.serverdb_alias"
                        :disabled="! Gate::check('update', $team)" />

            <x-jet-input-error for="name" class="mt-2" />
        </div>

         <!-- ServerDB Ip -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('ServerDB IP') }}" />
            
            <x-jet-input id="serverdb_ip"
                        type="text"
                        class="block w-full mt-1"
                        wire:model.defer="state.serverdb_ip"
                        :disabled="! Gate::check('update', $team)" />

            <x-jet-input-error for="name" class="mt-2" />
        </div>
  
         <!-- ServerDB User -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('ServerDB User') }}" />
            
            <x-jet-input id="serverdb_user"
                        type="text"
                        class="block w-full mt-1"
                        wire:model.defer="state.serverdb_user"
                        :disabled="! Gate::check('update', $team)" />

            <x-jet-input-error for="name" class="mt-2" />
        </div>

         <!-- ServerDB Password -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('ServerDB Password') }}" />
            
            <x-jet-input id="serverdb_password"
                        type="text"
                        class="block w-full mt-1"
                        wire:model.defer="state.serverdb_password"
                        :disabled="! Gate::check('update', $team)" />

            <x-jet-input-error for="name" class="mt-2" />
        </div>

         <!-- ServerDB DB -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('ServerDB Database') }}" />
            
            <x-jet-input id="serverdb_db"
                        type="text"
                        class="block w-full mt-1"
                        wire:model.defer="state.serverdb_db"
                        :disabled="! Gate::check('update', $team)" />

            <x-jet-input-error for="name" class="mt-2" />
        </div>

             <!-- ServerDB Port -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('ServerDB Port') }}" />
            
            <x-jet-input id="serverdb_port"
                        type="number"
                        class="block w-full mt-1"
                        wire:model.defer="state.serverdb_port"
                        :disabled="! Gate::check('update', $team)" />

            <x-jet-input-error for="name" class="mt-2" />
        </div>

    </x-slot>

    @if (Gate::check('update', $team))
        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    @endif
</x-jet-form-section>
