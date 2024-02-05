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



</x-app-layout>
