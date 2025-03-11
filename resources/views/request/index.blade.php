@extends("layouts.navbar")

@section("content")
<div class="main-content">
    <!-- main content start -->
    <div>
        <div class="page-title">
            <h3>Список запитів на забір матеріалу</h3>
        </div>

            <div class="filter-list bgnc-10 ">
                <div class="px-30 pt-3 pb-30">
                    <form action="#" class="d-between gap-30 mb-30">
                        <div class="w-100">
                            <label class="para-1b d-block tnc-1 mb-10">Name</label>
                            <input class="form-control px-xxl-30 py-xxl-20 p-lg-20 p-3" type="text"
                                   placeholder="Your name">
                        </div>
                        <div class="w-100">
                            <label class="para-1b d-block tnc-1 mb-10">Email</label>
                            <input class="form-control px-xxl-30 py-xxl-20 p-lg-20 p-3" type="email"
                                   placeholder="Your email">
                        </div>
                        <div class="w-100">
                            <label class="para-1b d-block tnc-1 mb-10">Phone</label>
                            <input class="form-control px-xxl-30 py-xxl-20 p-lg-20 p-3" type="number"
                                   placeholder="Your number">
                        </div>
                    </form>
                    <button class="btn-2">Submit</button>
                </div>
            </div>
            <!-- pop up filter box end -->
            <!-- table start -->
            <table class="list-table" id="itemTable">
                <thead>
                <tr>
                    <th class="text-center sort-devices">ID</th>
                    <th class="sort-devices">Дата збору</th>
                    <th class="sort-devices">Лікар</th>
                    <th class="sort-devices">Назва Клініки</th>
                    <th class="sort-devices">Створений</th>
                    <th class="sort-devices">Статус</th>
                    <th>Дія</th>
                </tr>
                </thead>
                <tbody>
                @foreach($requests as $request)
                <tr>
                    <td class="text-center">{{$request->id}}</td>
                    <td>{{$request->collect_date}}</td>
                    <td>{{$request->employee->name}}</td>
                    <td>{{$request->employee->clinic->name}}</td>
                    <td>{{$request->created_at}}</td>
                    <td>{{$request->status}}</td>
                    <td class="tsc-1">Видалити</td>
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
            <!-- pagination end  -->
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
