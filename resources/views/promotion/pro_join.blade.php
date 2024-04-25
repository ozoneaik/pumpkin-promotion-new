@extends('layouts.layout')

@section('style-addon')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection


@section('head-page','เข้าร่วมโปรโมชั่น')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-4">
            <div class="card">
                <div class="card-header text-bold">เข้าร่วมโปโมชั่น</div>
                <div class="card-body pb-0">
                    <form action="">
                        <div class="form-group input-group input-group-sm ">
                            <label for="">รหัสลูกค้า  :</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group input-group input-group-sm">
                            <label for="">ชื่อลูกค้า  :</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group input-group input-group-sm">
                            <label for="">ที่อยู่  : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group input-group input-group-sm">
                            <label for="">ตำบล/แขวง  : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group input-group input-group-sm">
                            <label for="">จังหวัด : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group input-group input-group-sm">
                            <label for="">เบอร์โทรติดต่อ  : </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group input-group input-group-sm">
                            <label for="">เลือกโปรโมชั่นที่จะเข้าร่วม  :</label>
                            <select name="select-promotion" id="sel-pro" class="form-control select2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="form-group input-group input-group-sm">
                            <label for="">เป้ายอดสะสม  :</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group input-group input-group-sm">
                            <label for="">ชื่อพนักงานที่ดูแล  :</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group input-group input-group-sm">
                            <label for="">วันที่เริ่มโปโมชั่น  :</label>
                            <input type="datetime-local" class="form-control">
                        </div>

                        <div class="form-group input-group input-group-sm">
                            <label for="">วันที่สินสุด  :</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <button class="btn btn-sm btn-primary">เข้าร่วมโปรโมชั่น</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-header text-bold">รายชื่อร้านที่เข้าร่วม</div>
                <div class="card-body">
                    <table class="table" id="list-promotion">
                        <thead>
                        <tr>
                            <th>รหัสโปโมชั่น</th>
                            <th>ชื่อโปรโมชั่น</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0;$i<40;$i++)
                            <tr>
                                <td>PRO1506130001</td>
                                <td>promotion แผ่นไฟเบอร์ {{$i}}	</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

@section('script-addon')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
@endsection

<script>
    $(function () {
        $("#list-promotion").DataTable({
            paging: false,
            scrollY: '250px',
            bScrollCollapse: true,
            ordering: false
        });
        $('.select2').select2()
    });
</script>
