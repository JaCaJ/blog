{{-- 
//forma de importar los componentes
@component('components.layout')
    @include('partials.navigation')
@endcomponent 
--}} 
<x-layout meta-title="Home title" meta-description="Home desciption">
    <h1>Inicio</h1>
    <x-slot:sidebar>
        Home Sidebar
    </x-slot:sidebar>
</x-layout>