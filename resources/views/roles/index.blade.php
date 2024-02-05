<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Dashboard') }}
        </h2>
        {{--        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">--}}
        {{--            <div class="sidebar-sticky">--}}
        {{--                <ul class="nav flex-column">--}}
        {{--                    @role('super-user')--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <x-nav-link class="nav-link active" href="#">--}}
        {{--                            <i class="fas fa-home"></i>--}}
        {{--                            Главная <span class="sr-only">(current)</span>--}}
        {{--                        </x-nav-link>--}}
        {{--                    </li>--}}

        {{--                    <li class="nav-item">--}}
        {{--                        <x-nav-link class="nav-link" :href="route('cost')">--}}
        {{--                            <i class="fas fa-box"></i>--}}
        {{--                            Ценаобразование--}}
        {{--                        </x-nav-link>--}}
        {{--                    </li>--}}

        {{--                    <li class="nav-item">--}}
        {{--                        <x-nav-link class="nav-link" href="#">--}}
        {{--                            <i class="fas fa-shopping-cart"></i>--}}
        {{--                            Бронирование--}}
        {{--                        </x-nav-link>--}}
        {{--                    </li>--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <x-nav-link class="nav-link" href="#">--}}
        {{--                            <i class="fas fa-users"></i>--}}
        {{--                            Расходы--}}
        {{--                        </x-nav-link>--}}
        {{--                    </li>--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <x-nav-link class="nav-link" href="#">--}}
        {{--                            <i class="fas fa-chart-line"></i>--}}
        {{--                            Собственники--}}
        {{--                        </x-nav-link>--}}
        {{--                    </li>--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <x-nav-link class="nav-link" href="#">--}}
        {{--                            <i class="fas fa-cog"></i>--}}
        {{--                            Объекты--}}
        {{--                        </x-nav-link>--}}
        {{--                    </li>--}}
        {{--                    @endrole--}}

        {{--                    @role('basic-user')--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <x-nav-link class="nav-link" :href="route('cost')">--}}
        {{--                            <i class="fas fa-box"></i>--}}
        {{--                            Ценаобразование--}}
        {{--                        </x-nav-link>--}}
        {{--                    </li>--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <x-nav-link class="nav-link" href="#">--}}
        {{--                            <i class="fas fa-chart-line"></i>--}}
        {{--                            Собственники--}}
        {{--                        </x-nav-link>--}}
        {{--                    </li>--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <x-nav-link class="nav-link" href="#">--}}
        {{--                            <i class="fas fa-cog"></i>--}}
        {{--                            Объекты--}}
        {{--                        </x-nav-link>--}}
        {{--                    </li>--}}
        {{--                    @endrole--}}
        {{--                </ul>--}}
        {{--            </div>--}}
        {{--        </nav>--}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ ("You're logged in!") }}
                    <form action="{{route('admin.user.create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <select class="form-select" aria-label="Default select example" name="role">
                            <option selected>Open this select menu</option>
                                                        @foreach($roles as $role)
                                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                                        @endforeach
                        </select>
                        <div class="mb-3">
                            <label for="exampleInputFile" class="form-label">File</label>
                            <input type="file" class="form-control" id="exampleInputFile" name="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-success">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
