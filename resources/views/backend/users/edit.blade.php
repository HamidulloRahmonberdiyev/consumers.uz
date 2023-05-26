<x-layouts.backend.home>

    <x-slot:title> Foydalanuvchilar / {{ $user->name }} </x-slot:title>

    <x-layouts.backend.header> Foydalanuvchilar / {{ $user->name }} </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Foydalanuvchilar / {{ $user->name }}</h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Ism</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control is-valid @error('name') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Ism">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Familiya</label>
                            <input type="text" name="surname" value="{{ $user->surname }}" class="form-control is-valid @error('surname') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Familiya">
                            @error('surname')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Email</label>
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control is-valid @error('email') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="example@mail.com">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Parol</label>
                            <input type="password" name="password" class="form-control is-valid @error('password') is-invalid @else is-valid @enderror" id="inputSuccess">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Telefon raqam</label>
                            <input type="tel" name="phone" value="{{ $user->phone }}" class="form-control is-valid @error('phone') is-invalid @else is-valid @enderror" id="inputSuccess"  placeholder="+998">
                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mb-5">
                            <label class="col-form-label" for="inputSuccess">Rol</label>
                            <select class="form-control" name="role_id">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? ' selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input">
                                <label class="custom-file-label" for="customFile">Rasm kiriting</label>
                            </div>
                            @error('photo')
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
