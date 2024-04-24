@extends('layouts.layout')

@section('style-addon')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection


@section('head-page','Dashboard Promotion Gold')
@section('content')
    <div class="card p-3">
        <div class="success table-wrapper">
            <h4>ครบกำหนดแล้ว</h4>
            <table class="table table-bordered" id="due-now">
                <thead>
                <tr>
                    <th>รหัสลูกค้า</th>
                    <th>ชื่อร้านค้า</th>
                    <th>โปรที่ร่วมรายการ</th>
                    <th>วันที่เข้าร่วม</th>
                    <th>เป้ายอดสะสม</th>
                    <th>สถานะ</th>
                    <th>ยอดสะสมปัจจุบัน</th>
                    <th>ของสมนาคุณที่ได้รับ</th>
                </tr>
                </thead>
                <tbody style="height: 40px">
                @for($i=0;$i<=1;$i++)
                    <tr>
                        <td>3017047-VQ</td>
                        <td>ซีเอชสินรุ่งเรือง บจก.</td>
                        <td>promotion แผ่นไฟเบอร์</td>
                        <td>2015-06-24 15:46:17</td>
                        <td>45000</td>
                        <td>เบิกทองพิมพ์เอกสาร</td>
                        <td>48319.07</td>
                        <td>ยอดสะสมไม่ถึงเกณฑ์</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
        <hr>
        <div class="week mt-3">
            <h4>เหลือเวลาอีกหนึ่งอาทิตย์</h4>
            <table class="table table-bordered" id="week">
                <thead>
                <tr>
                    <th>รหัสลูกค้า</th>
                    <th>ชื่อร้านค้า</th>

                </tr>
                </thead>
                <tbody>
                @for($i=0;$i<=1;$i++)
                    <tr>
                        <td>ของสมนาคุณที่ได้รับ</td>
                        <td>ซีเอชสินรุ่งเรือง บจก.</td>

                    </tr>
                @endfor
                </tbody>
            </table>
        </div>

        <hr>
        <div class="mouth mt-3">
            <h4>เหลือเวลาอีกหนึ่งเดือน</h4>
            <table class="table table-bordered" id="mouth">
                <thead>
                <tr>
                    <th>รหัสลูกค้า</th>
                    <th>ชื่อร้านค้า</th>
                    <th>โปรที่ร่วมรายการ</th>

                </tr>
                </thead>
                <tbody>
                @for($i=0;$i<=1;$i++)
                    <tr>
                        <td>ของสมนาคุณที่ได้รับ</td>
                        <td>ซีเอชสินรุ่งเรือง บจก.</td>
                        <td>promotion แผ่นไฟเบอร์</td>
                    </tr>
                @endfor
                </tbody>
            </table>
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
        $("#due-now").DataTable({
        });$("#mouth").DataTable({
        });$("#week").DataTable({
        });
    });
</script>
