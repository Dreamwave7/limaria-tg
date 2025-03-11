@extends("layouts.navbar")

@section("content")

    <body class="bg-light">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-lg p-4">
                    <h3 class="text-center">Створення клініки</h3>
                    <form action="{{route('clinic.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Назва</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Адреса</label>
                            <input type="text" class="form-control" id="email" name="address" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 h-22">Створити</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
