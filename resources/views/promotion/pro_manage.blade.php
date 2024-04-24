@extends('layouts.layout')

@section('style-addon')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection


@section('head-page','')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-bold">สร้างโปรทอง</div>
                <div class="card-body pb-0">
                    <form action="">
                        <div class="form-group">
                            <label for="">ชื่อโปรโมชั่น</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group mb-0">
                            <input name="type-promotion" type="radio" id="accumulated">
                            <label for="accumulated" class="mr-3">แบบสะสมยอด</label>
                        </div>
                        <div class="form-group mb-0">
                            <input name="type-promotion" type="radio" id="set">
                            <label for="set" class="mr-3">แบบยกชุด </label>
                        </div>
                        <div class="form-group mb-0">
                            <input name="type-promotion" type="radio" id="tri">
                            <label for="tri">แบบไตรมาส </label>
                        </div>
                        <button class="btn btn-sm btn-primary">สร้างโปโมชั่น</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-bold">รายการโปรโมชั่น</div>
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
@endsection

<script>
    $(function () {
        $("#list-promotion").DataTable({
        });
    });
</script>
