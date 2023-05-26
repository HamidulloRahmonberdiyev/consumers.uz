<x-layouts.backend.home>

    <x-slot:title> Manzillar / {{ $address->name }} </x-slot:title>

    <x-layouts.backend.header>  Manzillar / {{ $address->name }} </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Tahrirlash / {{ $address->name }} </h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('addresses.update', $address->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess"> Manzil nomi</label>
                            <input type="text" name="name" value="{{ $address->name }}" class="form-control is-valid @error('name') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Manzil nomi">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
