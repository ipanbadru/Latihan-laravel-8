<x-app-layout>
    
    <div class="container">
        <h1>Edit Tasks</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('tasks.update', $task->id) }}" method="post">
                    @method('put')
                    @csrf
                    @include('tasks._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>