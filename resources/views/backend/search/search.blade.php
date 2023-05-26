<x-layouts.backend.home>

    <x-slot:title> Qidiruv </x-slot:title>

    <x-layouts.backend.header> Qidiruv </x-layouts.backend.header>

        <h2 class="text-center display-4">Qidiruv</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('consumers.search') }}" method="GET">
                        @csrf
                        <div class="input-group">
                            <input type="search" name="search" class="form-control form-control-lg" placeholder="Iste'molchi ismi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</x-layouts.backend.home>