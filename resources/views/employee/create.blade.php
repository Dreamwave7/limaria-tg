@extends("layouts.navbar")

@section("content")

    <body class="bg-light">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-lg p-4">
                    <h3 class="text-center">Створення лікаря</h3>
                    <form action="{{route('employee.store')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">ПІБ</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-30">
                            <label for="clinic" class="form-label">Назва клініки</label>
                            <select  id="clinic" name="clinic_id" required>
                                @foreach($clinics as $clinic)
                                    <option value="{{$clinic->id}}">{{$clinic->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="telegram_name" class="form-label">Telegram name</label>
                            <input type="text" class="form-control" id="name" name="telegram_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="telegram_id" class="form-label">Telegram ID</label>
                            <input type="text" class="form-control" id="telegram_id" name="telegram_id" required>
                        </div>



                        <button type="submit" class="btn btn-primary w-100 h-22">Створити</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
