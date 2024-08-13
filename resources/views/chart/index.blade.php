<x-app-layout>
    <x-slot name="header">
        {{ __('Chart') }}
    </x-slot>
    <x-main-panel>
        <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    </x-main-panel>

</x-app-layout>
