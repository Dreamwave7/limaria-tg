@extends("layouts.navbar")

@section("content")
<div class="main-content">
    <!-- main content start -->
    <div>
        <div class="page-title">
            <h3>Список лікарів</h3>
        </div>
        <button type="button" class="btn btn-success btn-lg">
            <a href="{{route('employee.create')}}" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">  Створити працівника  </a>
        </button>

            <div class="filter-list bgnc-10 ">
                <div class="px-30 pt-3 pb-30">
                    <form action="#" class="d-between gap-30 mb-30">
                        <div class="w-100">
                            <label class="para-1b d-block tnc-1 mb-10">Name</label>
                        </div>
                        <div class="w-100">
                            <label class="para-1b d-block tnc-1 mb-10">Email</label>
                        </div>
                        <div class="w-100">
                            <label class="para-1b d-block tnc-1 mb-10">Phone</label>
                        </div>
                    </form>
                    <button class="btn-2">Submit</button>
                </div>
            </div>

            <table class="list-table" id="itemTable">
                <thead>
                <tr>
                    <th class="text-center sort-devices">ID</th>
                    <th class="sort-devices">Name</th>
                    <th class="sort-devices">Telegram name</th>
                    <th class="sort-devices">telegram id</th>
                    <th class="sort-devices">Назва Клініки</th>
                    <th>Дія</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td class="text-center">{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->telegram_name}}</td>
                    <td>{{$employee->telegram_id}}</td>
                    <td>{{$employee->clinic->name}}</td>
                    <td>
                        <form action="{{route('employee.destroy',["employee" => $employee->id])}}" method="post">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-outline-danger btn-lg">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- table end -->

            <!-- pagination start  -->
            <div class="list-footer d-between bgnc-10 br-brl-sm px-30 py-3">
                <span class="para-1b fs-base d-block">Showing 1 to 10 of 14 entries</span>
                <ul class="pagination-item">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa-solid fa-angles-left"></i></span>
                        </a>
                    </li>
                    <li class="page-item "><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            <span aria-hidden="true"><i class="fa-solid fa-angles-right"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- main content end -->

    <!-- footer start  -->
    <footer>
        <div class="container-fluid">
                    <span class="para-1b fs-base text-center text-sm-start d-block ">Copyright © <span
                            class="currentYear"></span> HealthEase Medical. All
                        rights reserved.</span>
        </div>
    </footer>
    <!-- footer end  -->
</div>
@endsection
