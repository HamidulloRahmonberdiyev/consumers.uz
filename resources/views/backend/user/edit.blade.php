<x-layouts.backend.home>

    <x-slot:title> {{ $user->name }} </x-slot:title>

    <x-layouts.backend.header> {{ $user->name }} </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tahrirlash / {{ $user->name }}</h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
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

                        <div class="form-group mb-4">
                            <label class="col-form-label" for="inputSuccess">Telefon raqam</label>
                            <input type="tel" name="phone" value="{{ $user->phone }}" class="form-control is-valid @error('phone') is-invalid @else is-valid @enderror" id="inputSuccess"  placeholder="+998">
                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="photo" value="{{ $user->photo }}">
                            <input type="hidden" name="password" value="{{ $user->password }}">
                            <button class="btn btn-info">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
