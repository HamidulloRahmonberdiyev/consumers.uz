<x-layouts.backend.home>

    <x-slot:title> Tariflar </x-slot:title>

    <x-layouts.backend.header> Tariflar </x-layouts.backend.header>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tariflar</h3>

                    <div class="card-tools">
                        <a href="{{ route('rates.create') }}" class="btn btn-default text-success">Tarif yaratish <i class="fas fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Nomi</th>
                                <th>Narx</th>
                                <th>Muddati</th>
                                <th>Amal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rates as $rate)
                                <tr>
                                    <td>{{ $rate->id }}</td>
                                    <td><a href="{{ route('rates.edit', $rate->id) }}" class="text-white">{{ $rate->title }}</a></td>
                                    <td>{{ $rate->price }}</td>
                                    <td>{{ $rate->lifetime }}</td>
                                    <td>
                                        <a class="nav-link" data-toggle="dropdown" href="#">
                                            <h4><i class="fa fa-ellipsis-v"></i></h4>
                                        </a>
                                        <div class="dropdown-menu p-3 text-white">
                                            <div class="p-2"><a
                                                    href="{{ route('rates.edit', $rate->id) }}"
                                                    type="submit" class="btn btn-default text-warning">Tahrirlash <i
                                                        class="fas fa-pen"></i></a></div>
                                            <div class="p-2">
                                                <form action="{{ route('rates.destroy', $rate->id) }}" method="POST">
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
            {{ $rates->links() }}

        </div>
    </div>

</x-layouts.backend.home>
