<x-layouts.backend.home>

    <x-slot:title> Savollar / Savol yaratish </x-slot:title>

    <x-layouts.backend.header> Savol yaratish</x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Savol yaratish</h3>                   
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess"> Sarlavha</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control font-italic is-valid @error('title') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Sarlavha kiriting">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess"> Maqola</label>
                            <textarea name="content" class="form-control font-italic" rows="7" placeholder="Maqola kiriting">{{ old('content') }}</textarea>
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
