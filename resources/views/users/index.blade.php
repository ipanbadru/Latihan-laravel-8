<x-app-layout>
    <div class="container">
        <h1>All Users</h1>

        @foreach ($users as $user)
            <li><a href="{{ route('user.show', $user) }}">{{ $user->name }}</a></li>
        @endforeach
    </div>
</x-app-layout>