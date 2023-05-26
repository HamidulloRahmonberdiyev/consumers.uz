<x-layouts.backend.home>

    <x-slot:title> Hamkorlar / Hamkor qo'shish </x-slot:title>

    <x-layouts.backend.header>   Hamkorlar / Hamkor qo'shish </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hamkor qo'shish </h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group mb-5">
                            <label class="col-form-label" for="inputSuccess">Sarlavha</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control font-italic is-valid @error('name') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Nom kiritng">
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
