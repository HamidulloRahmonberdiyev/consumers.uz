<x-layouts.backend.home>

    <x-slot:title> Manzillar / Manzil yaratish </x-slot:title>

    <x-layouts.backend.header>  Manzil yaratish  </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Manzil yaratish </h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('addresses.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess"> Manzil nomi</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control is-valid @error('name') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Manzil nomi">
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
