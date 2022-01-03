<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
        <h6>
           
        </h6>
        
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <h6>
                    @livewire('todo.show')
                 </h6>
            </div>
        </div>
    </div>
</x-app-layout>
