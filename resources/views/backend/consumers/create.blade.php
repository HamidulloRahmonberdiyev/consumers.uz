<x-layouts.backend.home>

    <x-slot:title> Iste'molchilar / Iste'molchi yaratish </x-slot:title>

    <x-layouts.backend.header> Iste'molchi yaratish </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Iste'molchi yaratish</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('consumers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Ism</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control is-valid @error('name') is-invalid @else is-valid @enderror"
                                id="inputSuccess" placeholder="Ism">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Familiya</label>
                            <input type="text" name="surname" value="{{ old('surname') }}"
                                class="form-control is-valid @error('surname') is-invalid @else is-valid @enderror"
                                id="inputSuccess" placeholder="Familiya">
                            @error('surname')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Telefon raqam</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                class="form-control is-valid @error('phone') is-invalid @else is-valid @enderror"
                                id="inputSuccess" placeholder="+998">
                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mb-5">
                            <label class="col-form-label" for="inputSuccess">Manzil</label>
                            <select class="form-control" name="address_id">
                                @foreach ($addresses as $address)
                                    <option value="{{ $address->id }}">{{ $address->name }}</option>
                                @endforeach
                            </select>
                            @error('address_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    <table class="table table-hover">
                        <tbody>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>
                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                    Buyurtma
                                </td>
                            </tr>
                            <tr class="expandable-body">
                                <td>
                                    <div class="p-0">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="inputSuccess">Soni</label>
                                                    <input type="number" name="quantity" value="{{ old('quantity') }}"
                                                        class="form-control is-valid @error('quantity') is-invalid @else is-valid @enderror"
                                                        id="inputSuccess" placeholder="0">
                                                    @error('quantity')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label" for="inputSuccess">Qaytarildi</label>
                                                    <input type="number" name="returned" value="{{ old('returned') }}"
                                                        class="form-control is-valid @error('returned') is-invalid @else is-valid @enderror"
                                                        id="inputSuccess" placeholder="0">
                                                    @error('returned')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label" for="inputSuccess">Sana</label>
                                                    <input type="text" name="date"
                                                        value="{{ now()->format('Y-m-d') }}"
                                                        class="form-control is-valid @error('date') is-invalid @else is-valid @enderror"
                                                        id="inputSuccess">
                                                    @error('date')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <button class="btn btn-info">Saqlash</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.home>
