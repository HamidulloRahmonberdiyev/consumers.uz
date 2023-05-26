<x-layouts.backend.home>

    <x-slot:title> Tariflar / {{ $rate->title }} </x-slot:title>

    <x-layouts.backend.header> Tariflar / {{ $rate->title }} </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tahrirlash / {{ $rate->title }}</h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('rates.update', $rate->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Nomi</label>
                            <input type="text" name="title" value="{{ $rate->title }}" class="form-control font-italic is-valid @error('title') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Nom kiriting">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Narx</label>
                            <input type="text" name="price" value="{{ $rate->price }}" class="form-control font-italic is-valid @error('price') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Narx kiriting">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Muddati</label>
                            <input type="text" name="lifetime" value="{{ $rate->lifetime }}" class="form-control font-italic is-valid @error('lifetime') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Muddatini kiriting">
                            @error('lifetime')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mb-5">
                            <label class="col-form-label" for="inputSuccess">Maqola</label>
                            <textarea name="content" class="form-control font-italic @error('content') is-invalid @else is-valid @enderror" rows="7" placeholder="Maqola kiritng">{{ $rate->content }}</textarea>
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
