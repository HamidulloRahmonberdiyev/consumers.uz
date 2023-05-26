<x-layouts.backend.home>

    <x-slot:title> Ma'lumotlar </x-slot:title>

    <x-layouts.backend.header> Ma'lumotlar </x-layouts.backend.header>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ma'lumotlar</h3>

                    <div class="card-tools">
                        <a href="{{ route('informations.create') }}" class="btn btn-default text-success">Ma'lumotlar yaratish <i class="fas fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Rasm</th>
                                <th>Sarlavha</th>
                                <th>Qo'shilgan sana</th>
                                <th>Amal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($informations as $information)
                                <tr>
                                    <td>{{ $information->id }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $information->image) }}" style="width:80px;border-radius:5px" alt="User Image">
                                    </td>
                                    <td><a href="{{ route('informations.edit', $information->id) }}" class="text-white">{{ $information->title }}</a></td>
                                    <td>{{ $information->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <a class="nav-link" data-toggle="dropdown" href="#">
                                            <h4><i class="fa fa-ellipsis-v"></i></h4>
                                        </a>
                                        <div class="dropdown-menu p-3 text-white">
                                            <div class="p-2"><a
                                                    href="{{ route('informations.edit', $information->id) }}"
                                                    type="submit" class="btn btn-default text-warning">Tahrirlash <i
                                                        class="fas fa-pen"></i></a></div>
                                            <div class="p-2">
                                                <form action="{{ route('informations.destroy', $information->id) }}" method="POST">
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
            {{ $informations->links() }}

        </div>
    </div>

</x-layouts.backend.home>
