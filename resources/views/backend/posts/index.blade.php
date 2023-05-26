<x-layouts.backend.home>

    <x-slot:title> Postlar </x-slot:title>

    <x-layouts.backend.header> Postlar </x-layouts.backend.header>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Postlar</h3>

                    <div class="card-tools">
                        <a href="{{ route('posts.create') }}" class="btn btn-default text-success">Post yaratish <i class="fas fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Rasm</th>
                                <th>Sarlavha</th>
                                <th>Qo'shilgan sana</th>
                                <th>Amal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $post->image) }}" style="width:80px;border-radius:5px" alt="User Image">
                                    </td>
                                    <td><a href="{{ route('posts.edit', $post->id) }}" class="text-white">{{ $post->title }}</a></td>
                                    <td>{{ $post->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <a class="nav-link" data-toggle="dropdown" href="#">
                                            <h4><i class="fa fa-ellipsis-v"></i></h4>
                                        </a>
                                        <div class="dropdown-menu p-3 text-white">
                                            <div class="p-2"><a
                                                    href="{{ route('posts.edit', $post->id) }}"
                                                    type="submit" class="btn btn-default text-warning">Tahrirlash <i
                                                        class="fas fa-pen"></i></a></div>
                                            <div class="p-2">
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-default text-danger">O'chirish <i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $posts->links() }}

        </div>
    </div>

</x-layouts.backend.home>
