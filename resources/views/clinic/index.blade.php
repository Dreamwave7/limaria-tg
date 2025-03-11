@extends("layouts.navbar")

@section("content")
    <div class="main-content">
        <!-- main content start -->
        <div>
            <div class="page-title">
                <h3>Список клінік</h3>
            </div>
            <button type="button" class="btn btn-success btn-lg">
                <a href="/create-clinic" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">  Створити клініку  </a>
            </button>

            <!-- pop up filter box end -->
            <!-- table start -->
            <table class="list-table" id="itemTable">
                <thead>
                <tr>
                    <th class="text-center sort-devices">ID</th>
                    <th class="sort-devices">Назва</th>
                    <th class="sort-devices">Адреса</th>
                    <th>Дія</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clinics as $clinic)
                    <tr>
                        <td class="text-center">{{$clinic->id}}</td>
                        <td>{{$clinic->name}}</td>
                        <td>{{$clinic->address}}</td>
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
