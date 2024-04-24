@extends('layouts.layout')

@section('style-addon')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection


@section('head-page','DASHBORAD PROMOTION GOLD')
@section('content')
    <div class="card">
        <div class="card-header text-bold">ครบกำหนดแล้ว</div>
        <div class="card-body">
            <table class="table" id="done">
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
                <tbody>
                @for($i=0;$i<1;$i++)
                    <tr>
                        <td>1761901010 {{$i}}</td>
                        <td>ซีเอชสินรุ่งเรือง บจก.</td>
                        <td>promotion แผ่นไฟเบอร์</td>
                        <td>2015-06-24 15:46:17์</td>
                        <td>45000</td>
                        <td>เบิกทองพิมพ์เอกสาร</td>
                        <td>48319.07</td>
                        <td>ยอดสะสมไม่ถึงเกณฑ์</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header text-bold">เหลือเวลาอีกหนึ่งเดือน</div>
        <div class="card-body">
            <table class="table" id="mouth">
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
                <tbody>
                @for($i=0;$i<0;$i++)
                    <tr>
                        <td>1761901010</td>
                        <td>ซีเอชสินรุ่งเรือง บจก.</td>
                        <td>promotion แผ่นไฟเบอร์</td>
                        <td>2015-06-24 15:46:17์</td>
                        <td>45000</td>
                        <td>เบิกทองพิมพ์เอกสาร</td>
                        <td>48319.07</td>
                        <td>ยอดสะสมไม่ถึงเกณฑ์</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header text-bold">เหลือเวลาอีกหนึ่งอาทิตย์</div>
        <div class="card-body">
            <table class="table" id="week">
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
                <tbody>
                @for($i=0;$i<0;$i++)
                    <tr>
                        <td>1761901010</td>
                        <td>ซีเอชสินรุ่งเรือง บจก.</td>
                        <td>promotion แผ่นไฟเบอร์</td>
                        <td>2015-06-24 15:46:17์</td>
                        <td>45000</td>
                        <td>เบิกทองพิมพ์เอกสาร</td>
                        <td>48319.07</td>
                        <td>ยอดสะสมไม่ถึงเกณฑ์</td>
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
        $("#done").DataTable({
            responsive: true
        });
        $("#mouth").DataTable({
            responsive: true
        });
        $("#week").DataTable({
            responsive: true
        });
    });
</script>
