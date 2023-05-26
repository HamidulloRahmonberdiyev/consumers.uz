<x-layouts.backend.home>

    <x-slot:title> Savollar </x-slot:title>

    <x-layouts.backend.header> Savollar </x-layouts.backend.header>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Savollar</h3>

                    <div class="card-tools">
                        <a href="{{ route('questions.create') }}" class="btn btn-default text-success">Savol yaratish <i class="fas fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Sarlavha</th>
                                <th>Qo'shilgan sana</th>
                                <th>Amal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                <tr>
                                    <td>{{ $question->id }}</td>
                                    <td>{{ $question->title }}</td>
                                    <td>{{ $question->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('questions.edit', $question->id) }}" type="submit"
                                            class="btn btn-default text-warning"><i class="fas fa-pen"></i></a>
                                        <form action="{{ route('questions.destroy', $question->id) }}" method="POST"
                                            onclick="return confirm('Haqiqatdan ham ushbu ma\'lumotni o\'chirmoqchimisiz?');"
                                            style="margin-left:50px; margin-top:-37.5px">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-default text-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $questions->links() }}

        </div>
    </div>

</x-layouts.backend.home>
