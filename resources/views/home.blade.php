<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Welcome to my site</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ad maxime maiores ipsa
                            aperiam deserunt. Suscipit.</p>
                        <p>Consectetur laborum ut doloremque animi in voluptatibus tenetur obcaecati, repudiandae dolor
                            modi sed quas, quod recusandae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
