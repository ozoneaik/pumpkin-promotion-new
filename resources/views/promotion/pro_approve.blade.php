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


@section('head-page','อนุมัติเบิกทอง')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-bold">ค้นหาลูกค้าที่ต้องการเบิกทอง</div>
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
                        <button class="btn btn-sm btn-primary">ตรวจสอบ</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form action="">
                <div class="card bg-success">
                    <div class="card-header text-bold">เริ่มเบิกทอง</div>
                    <div class="card-body">
                        <div class="detail mb-3">
                            <p class="mb-2"><span class="text-bold">เลขที่  : </span>JO24032701510</p>
                            <p class="mb-2"><span class="text-bold">ชื่อลูกค้า :</span> เค.เจ.ที.เทรดดิ้ง บจก.(สำนักงานใหญ่)</p>
                            <p class="mb-2"><span class="text-bold">โปรโมชั่นที่ร่วม  :</span> promotion แผ่นไฟเบอร์</p>
                            <p class="mb-2"><span class="text-bold">ยอดสะสม  :</span>189328.16</p>
                            <p class="mb-2"><span class="text-bold">ของสมนาคุณ  :</span></p>
                            <div class="ml-3">
                                <div class="form-group">
                                    <input type="radio" id="G" name="free-gift">
                                    <label for="G">G<input class="ml-1" type="text" value="ทอง 1 สลึง" readonly></label>
                                </div>
                                <div class="form-group">
                                    <input type="radio" id="V" name="free-gift">
                                    <label for="V">V</label>
                                </div>
                                <div class="form-group">
                                    <input type="radio" id="other" name="free-gift">
                                    <label for="other">อื่นๆ</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-warning">
                    <div class="card-header text-bold">ตรวจสอบเอกสารกลับ</div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="upload-file">เอกสารตอบรับจากลูกค้า</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="reject-customer" name="upload-file">
                                    <label id="reject-customer" class="custom-file-label" for="">เอกสารตอบรับจากลูกค้า  :</label>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-primary">ตรวจสอบเอกสารผ่าน</button>
                        </form>
                    </div>
                </div>

                <div class="card bg-warning">
                    <div class="card-header text-bold">รายละเอียดจบโปรโมชั่น</div>
                    <div class="card-body">
                        <div class="detail">
                            <p><span class="text-bold">เลขที่ : </span>JO24032701510</p>
                            <p><span class="text-bold">ชื่อลูกค้า  :</span>เค.เจ.ที.เทรดดิ้ง บจก.(สำนักงานใหญ่)</p>
                            <p><span class="text-bold">โปรโมชั่นที่ร่วม  :</span>promotion แผ่นไฟเบอร์</p>
                            <p><span class="text-bold">ยอดสะสม  :</span>189328.16</p>
                            <p><span class="text-bold">ของสมนาคุณ  :</span>ทอง 1 สลึง</p>
                        </div>
                        <hr>
                        <h3 class="text-light text-center">อยู่ระหว่างรออนุมัติจบโปรโมชั่น</h3>
                    </div>
                </div>
            </form>

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
            pageLength: 100,
            "responsive": true,
        });
        $('.select2').select2()
    });
</script>
