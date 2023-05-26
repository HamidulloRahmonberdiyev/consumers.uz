<x-layouts.backend.home>

    <x-slot:title> {{ $user->name }} </x-slot:title>

    <x-layouts.backend.header> {{ $user->name }} </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Profil rasmini o'zgartirish / {{ $user->name }}</h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('user.photo.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-4">
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" required>
                                <label class="custom-file-label" for="customFile">Rasm kiriting</label>
                            </div>
                            @error('photo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="name" value="{{ $user->name }}">
                            <input type="hidden" name="surname" value="{{ $user->surname }}">
                            <input type="hidden" name="email" value="{{ $user->email }}">
                            <input type="hidden" name="password" value="{{ $user->password }}">
                            <input type="hidden" name="phone" value="{{ $user->phone }}">
                            <button class="btn btn-info">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
