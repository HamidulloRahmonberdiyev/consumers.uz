<x-layouts.backend.home>

    <x-slot:title> O'chirilganlar </x-slot:title>

    <x-layouts.backend.header> O'chirilganlar </x-layouts.backend.header>

    <div class="row mb-5">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('trashed.search') }}" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="search" class="form-control form-control-lg" placeholder="Iste'molchi ismi">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('trashed.deleteAll') }}" method="POST" class="mb-3 ml-2">
            @method('DELETE')
            @csrf
            <button class="btn btn-default text-danger">Savatni tozlash <i class="fas fa-trash"></i></button>
        </form> 
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">O'chirilganlar</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Ism</th>
                                <th>Familiya</th>
                                <th>Telefon</th>
                                <th>Manzil</th>
                                <th>Soni</th>
                                <th>Qaytarildi</th>
                                <th>Sana</th>
                                <th>Amal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consumers as $consumer)                               
                            <tr>
                                <td>{{ $consumer->id }}</td>
                                <td>{{ $consumer->name }}</td>
                                <td>{{ $consumer->surname }}</td>
                                <td class="text-primary">{{ $consumer->phone }}</td>
                                <td>{{ $consumer->address->name }}</td>
                                <td>{{ $consumer->quantity == null ? 0  : $consumer->quantity }}</td>
                                <td>{{ $consumer->returned == null ? 0  : $consumer->returned }}</td>
                                <td>{{ $consumer->date->format('d-m-Y') }}</td>
                                <td>
                                    <form action="{{ route('trashed.restore', $consumer->id) }}" method="POST">
                                        @method('POST')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $consumer->id }}">
                                        <button class="btn btn-default text-success">Tiklash <i class="fas fa-undo"></i></button>
                                    </form>                               
                                    <form action="{{ route('trashed.delete', $consumer->id) }}" method="POST" style="margin-left:110px; margin-top:-37.5px">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $consumer->id }}">
                                        <button class="btn btn-default text-danger">O'chirish <i class="fas fa-trash"></i></button>
                                    </form>                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   </x-layouts.backend.home>
