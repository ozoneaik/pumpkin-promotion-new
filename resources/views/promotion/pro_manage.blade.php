@extends('layouts.layout')

@section('style-addon')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection


@section('head-page','จัดการโปรโมชั่น')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-4">
            <div class="card">
                <div class="card-header text-bold">สร้างโปรทอง</div>


                {{date("d/m/Y H:i:s")}}

                <div class="card-body pb-0">
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                            <strong>{{ $message }}</strong>

                        </div>
                    @endif

                    <form action="{{route('promotion.create-pro')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">ชื่อโปรโมชั่น</label>
                            <input type="text" class="form-control" name="name_promotion" value="{{old('name_promotion')}}">
                            @if($errors->has('name_promotion'))
                                <p class="text-danger">{{ $errors->first('name_promotion') }}</p>
                            @endif
                        </div>
                        <div class="form-group mb-0">
                            <input name="type_of_promotion" type="radio" id="accumulated" value="1" {{ old("type_of_promotion") == '1' ? 'checked' : '' }}>
                            <label for="accumulated" class="mr-3">แบบสะสมยอด</label>
                        </div>
                        <div class="form-group mb-0">
                            <input name="type_of_promotion" type="radio" id="set" value="2" {{ old("type_of_promotion") == '2' ? 'checked' : '' }}>
                            <label for="set" class="mr-3">แบบยกชุด </label>
                        </div>
                        <div class="form-group mb-0">
                            <input name="type_of_promotion" type="radio" id="tri" value="3" {{ old("type_of_promotion") == '3' ? 'checked' : '' }}>
                            <label for="tri">แบบไตรมาส </label>
                        </div>
                        @if($errors->has('type_of_promotion'))
                            <p class="text-danger">{{ $errors->first('type_of_promotion') }}</p>
                        @endif
                        <button class="btn btn-sm btn-primary">สร้างโปโมชั่น</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-header text-bold">รายการโปรโมชั่น</div>
                <div class="card-body">
                    <table class="table" id="list-promotion">
                        <thead>
                        <tr>
                            <th>รหัสโปโมชั่น</th>
                            <th>ชื่อโปรโมชั่น</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($promotions as $promotion)
                            <tr>
                                <td>{{$promotion->code_promotion}}</td>
                                <td>{{$promotion->name_promotion}}</td>
                                <td>
                                    <form id="deleteForm{{$promotion->id}}" action="{{route('promotion.delete-pro',$promotion->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="{{$promotion->id}}">ลบ</button>
                                    </form>
                                    <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editPromotion{{$promotion->id}}">แก้ไข</button>
                                </td>
                            </tr>
                            <div class="modal fade" id="editPromotion{{$promotion->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">name: </label>
                                                    <input type="text" class="form-control" value="{{$promotion->name_promotion}}">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <input name="type_of_promotion" type="radio" id="accumulated" value="1" {{ $promotion->type_of_promotion == 1 ? 'checked' : '' }}>
                                                    <label for="accumulated" class="mr-3">แบบสะสมยอด</label>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <input name="type_of_promotion" type="radio" id="set" value="2" {{ $promotion->type_of_promotion == 2 ? 'checked' : '' }}>
                                                    <label for="set" class="mr-3">แบบยกชุด </label>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <input name="type_of_promotion" type="radio" id="tri" value="3" {{ $promotion->type_of_promotion == 3 ? 'checked' : '' }}>
                                                    <label for="tri">แบบไตรมาส </label>
                                                </div>
                                                <h5 class="text-bold mt-3">ระดับเป้าสะสม</h5>
                                                @for($i=0;$i<10;$i++)
                                                    <div class="mb-2 mt-2">
                                                        <input type="text" placeholder="ยอดสะสมระดับที่{{$i+1}}" style="max-width: 150px">
                                                        <input type="text" placeholder="ของกำนัลระดับที่{{$i+1}}" style="max-width: 150px">
                                                        <input type="text" placeholder="ระยะเวลา{{$i+1}}" style="max-width: 150px">
                                                    </div>
                                                @endfor
                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
            paging: false,
            scrollY: '250px',
            bScrollCollapse: true,
            ordering: false
        });

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const promotionId = this.getAttribute('data-id');
                Swal.fire({
                    title: 'คุณแน่ใจหรือไม่?',
                    text: 'คุณต้องการที่จะลบโปรโมชั่นนี้หรือไม่?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ใช่, ลบ!',
                    cancelButtonText: 'ยกเลิก'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('deleteForm' + promotionId).submit();
                    }
                });
            });
        });
    });
</script>

