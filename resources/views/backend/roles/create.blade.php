<x-layouts.backend.home>

    <x-slot:title> Rollar / Role yaratish </x-slot:title>

    <x-layouts.backend.header> Role yaratish </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Role yaratish</h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess"> Rol nomi</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control is-valid @error('name') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Rol nomi">
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
