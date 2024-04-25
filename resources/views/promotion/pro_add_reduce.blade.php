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


@section('head-page','')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-bold">เพิ่มลดยอดเพิ่มเติม</div>
                <div class="card-body pb-0">
                    <form action="">
                        <div class="form-group">
                            <label for="">รหัสลูกค้า :</label>
                            <input type="text" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="">เลือกโปรโมชั่นที่ต้องการตรวจสอบยอด :</label>
                            <select name="select-promotion" id="sel-pro" class="form-control select2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">วันที่เริ่มโปโมชั่น :</label>
                            <input type="datetime-local" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">วันที่สินสุด :</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <button class="btn btn-sm btn-primary">ตรวจสอบ</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-bold">รายละเอียด</div>
                <div class="card-body">
                    <div class="detail mb-3">
                        <p class="mb-2"><span class="text-bold">รหัสลูกค้า : </span>3710101008</p>
                        <p class="mb-2"><span class="text-bold">ชื่อร้านค้า :</span> เค.เจ.ที.เทรดดิ้ง บจก.(สำนักงานใหญ่)</p>
                        <p class="mb-2"><span class="text-bold">จากวันที่</span> 2023-11-2020/11/2023 ถึง 2024-01-2929/01/2024</p>
                        <p class="mb-2"><span class="text-bold">โปรโมชั่นที่เข้าร่วม :</span> promotion แผ่นไฟเบอร์</p>
                        <p class="mb-2"><span class="text-bold">เป้าโปรโมชั่น :</span> 180000</p>
                    </div>


                    <form action="">
                        <table class="table" id="list-promotion">
                            <thead>
                            <tr>
                                <th>เลขที่บิล</th>
                                <th>ยอดเพิ่ม-ลด</th>
                                <th>หมายเหตุ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i=0;$i<16;$i++)
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="เลขที่บิล">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="ยอดเพิ่ม-ลด">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="หมายเหตุ">
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>

                        <button class="btn btn-sm btn-primary">บันทึกข้อมูล</button>
                    </form>

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
