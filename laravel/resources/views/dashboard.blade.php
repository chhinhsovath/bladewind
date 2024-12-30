<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-bladewind::accordion
    grouped="false">
    <x-bladewind::accordion.item title="What is BladewindUI?">
        <p>
            BladewindUI is a collection...
        </p>
    </x-bladewind::accordion.item>
    <x-bladewind::accordion.item title="How can I install the latest version of the library?">
        <div>
            At the root of your Laravel...
        </div>
    </x-bladewind::accordion.item>
    <x-bladewind::accordion.item title="How can I customize the library for my theme?">
        <div>
            BladewindUI has been designed ...
        </div>
    </x-bladewind::accordion.item>
</x-bladewind::accordion>

    </div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>

                
            </div>
        </div>
    </div>
</x-app-layout>
