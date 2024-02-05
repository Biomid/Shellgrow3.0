<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Dashboard') }}
        </h2>
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
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
                </ul>
            </div>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ ("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
