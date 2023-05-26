<x-layouts.backend.home>

    <x-slot:title> Tariflar / Tarif yaratish </x-slot:title>

    <x-layouts.backend.header> Tariflar / Tarif yaratish </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tarif yaratish</h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('rates.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Nomi</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control font-italic is-valid @error('title') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Nom kiriting">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Narx</label>
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control font-italic is-valid @error('price') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Narx kiriting">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Muddati</label>
                            <input type="text" name="lifetime" value="{{ old('lifetime') }}" class="form-control font-italic is-valid @error('lifetime') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Muddatini kiriting">
                            @error('lifetime')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mb-5">
                            <label class="col-form-label" for="inputSuccess">Maqola</label>
                            <textarea name="content" class="form-control font-italic @error('content') is-invalid @else is-valid @enderror" rows="7" placeholder="Maqola kiritng">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
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
