<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Dashboard') }}
        </h2>
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    @role('super-user')
                    <li class="nav-item">
                        <x-nav-link class="nav-link active" href="#">
                            <i class="fas fa-home"></i>
                            Главная <span class="sr-only">(current)</span>
                        </x-nav-link>
                    </li>

                    <li class="nav-item">
                        <x-nav-link class="nav-link" :href="route('cost')">
                            <i class="fas fa-box"></i>
                            Ценаобразование
                        </x-nav-link>
                    </li>

                    <li class="nav-item">
                        <x-nav-link class="nav-link" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Бронирование
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="nav-link" href="#">
                            <i class="fas fa-users"></i>
                            Расходы
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="nav-link" href="#">
                            <i class="fas fa-chart-line"></i>
                            Собственники
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="nav-link" href="#">
                            <i class="fas fa-cog"></i>
                            Объекты
                        </x-nav-link>
                    </li>
                    @endrole

                    @role('basic-user')
                    <li class="nav-item">
                        <x-nav-link class="nav-link" :href="route('cost')">
                            <i class="fas fa-box"></i>
                            Ценаобразование
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="nav-link" href="#">
                            <i class="fas fa-chart-line"></i>
                            Собственники
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="nav-link" href="#">
                            <i class="fas fa-cog"></i>
                            Объекты
                        </x-nav-link>
                    </li>
                    @endrole
                </ul>
            </div>
        </nav>
    </x-slot>
    <div class="container">
        <h1 class="mt-4 mb-3">Apartment List</h1>
        <div class="row">
            @foreach($apartments as $apartment)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
{{--                            <x-nav-link :href="route('user', $apartment->id)"><h4 class="card-title">Id: {{$user->id}}</h4></x-nav-link>--}}
                            <p class="card-text">Name: {{$apartment->name}}</p>
                            <p class="card-text">Local: {{$apartment->local}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-app-layout>
