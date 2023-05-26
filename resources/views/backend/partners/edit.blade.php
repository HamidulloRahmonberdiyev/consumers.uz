<x-layouts.backend.home>

    <x-slot:title> Hamkorlar / {{ $partner->name }}</x-slot:title>

    <x-layouts.backend.header>   Hamkorlar / {{ $partner->name }} </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tahrirlash / {{ $partner->name }} </h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group mb-5">
                            <label class="col-form-label" for="inputSuccess">Sarlavha</label>
                            <input type="text" name="name" value="{{ $partner->name }}" class="form-control font-italic is-valid @error('name') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Nom kiritng">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" required>
                                <label class="custom-file-label font-italic" for="customFile">Rasm kiriting</label>
                            </div>
                            @error('image')
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
