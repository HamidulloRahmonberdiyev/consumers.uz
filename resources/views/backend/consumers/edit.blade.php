<x-layouts.backend.home>

    <x-slot:title> Iste'molchilar / {{ $consumer->name }} </x-slot:title>

    <x-layouts.backend.header> Iste'molchilar / {{ $consumer->name }} </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tahrirlash / {{ $consumer->name }}</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('consumers.update', $consumer->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Ism</label>
                            <input type="text" name="name" value="{{ $consumer->name }}"
                                class="form-control is-valid @error('name') is-invalid @else is-valid @enderror"
                                id="inputSuccess" placeholder="Ism">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Familiya</label>
                            <input type="text" name="surname" value="{{ $consumer->surname }}"
                                class="form-control is-valid @error('surname') is-invalid @else is-valid @enderror"
                                id="inputSuccess" placeholder="Familiya">
                            @error('surname')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Telefon raqam</label>
                            <input type="tel" name="phone" value="{{ $consumer->phone }}"
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
                                    <option value="{{ $address->id }}" {{ $address->id == $consumer->address_id ? ' selected' : '' }}>{{ $address->name }}</option>
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
                                                    <input type="number" name="quantity" value="{{ $consumer->quantity }}"
                                                        class="form-control is-valid @error('quantity') is-invalid @else is-valid @enderror"
                                                        id="inputSuccess" placeholder="0">
                                                    @error('quantity')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label" for="inputSuccess">Qaytarildi</label>
                                                    <input type="number" name="returned" value="{{ $consumer->returned }}"
                                                        class="form-control is-valid @error('returned') is-invalid @else is-valid @enderror"
                                                        id="inputSuccess" placeholder="0">
                                                    @error('returned')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label" for="inputSuccess">Sana</label>
                                                    <input type="text" name="date"
                                                        value="{{ $consumer->date->format('d-m-Y') }}"
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
