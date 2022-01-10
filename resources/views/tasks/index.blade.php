<x-app-layout>
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-md-5">
                @include('tasks._create')
            </div>
            <div class="col-md-7">
                <ul class="list-group">
                    @foreach ($tasks as $index => $task)
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        {{ $index + 1 }} - {{ $task->list }}
                        <div class="d-flex">
                            <a class="btn btn-primary mx-2" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>
