<x-layouts.backend.home>

    <x-slot:title> Foydalanuvchilar </x-slot:title>

    <x-layouts.backend.header> Foydalanuvchilar </x-layouts.backend.header>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Foydalanuvchilar</h3>

                    <div class="card-tools">
                        <a href="{{ route('users.create') }}" class="btn btn-success">Foydalanuvchi yaratish <i class="fas fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Rasm</th>
                                <th>Ism</th>
                                <th>Familiya</th>
                                <th>Email</th>
                                <th>Telefon</th>
                                <th>Rol</th>
                                <th>Amal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <img src="{{ $user->photo == null ? asset('backend/dist/img/user.jpg') : asset('storage/' . $user->photo) }}" class="img-circle elevation-2" style="width:40px" alt="User Image">
                                    </td>
                                    <td><a href="{{ route('users.edit', $user->id) }}" class="text-white">{{ $user->name }}</a></td>
                                    <td><a href="{{ route('users.edit', $user->id) }}" class="text-white">{{ $user->surname }}</a></td>
                                    <td class="text-primary">{{ $user->email }}</td>
                                    <td class="text-primary">{{ $user->phone }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>
                                        <a class="nav-link" data-toggle="dropdown" href="#">
                                            <h4><i class="fa fa-ellipsis-v"></i></h4>
                                        </a>
                                        <div class="dropdown-menu p-3 text-white">
                                            <div class="p-2"><a
                                                    href="{{ route('users.edit', $user->id) }}"
                                                    type="submit" class="btn btn-default text-warning">Tahrirlash <i
                                                        class="fas fa-pen"></i></a></div>
                                            <div class="p-2">
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-default text-danger">O'chirish <i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $users->links() }}

        </div>
    </div>

</x-layouts.backend.home>
