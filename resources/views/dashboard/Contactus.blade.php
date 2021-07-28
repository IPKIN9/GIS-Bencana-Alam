@extends('layout.Dashboard')
@section('title')
Tabel Contact Us
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            @if ($errors->any())
            <div class="card borderless-card">
                <div class="card-block danger-breadcrumb">
                    <div class="breadcrumb-header">
                        <h5><i class="ti-alert"></i> Data tidak tersimpan</h5>
                    </div>
                </div>
            </div>
            @endif
            <div class="card-header">
                <h3>Data Contact Us</h3>
            </div>
            @if (session('status'))
            <div class="card borderless-card">
                <div class="card-block success-breadcrumb">
                    <div class="breadcrumb-header">
                        <h5><i class="ti-check"></i> {{ session('status') }}</h5>
                    </div>
                </div>
            </div>
            @endif
            <div class="card-block tab-icon">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">                       
                        <ul class="nav nav-tabs md-tabs " role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#table" role="tab"><i
                                        class="fa fa-table"></i>Table</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#formulir" role="tab"><i
                                        class="fa fa-list"></i>Formulir</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                        <div class="tab-content card-block">
                            <div class="tab-pane active" id="table" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Table Contact Us</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table id="contactus" class="display" style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Alamat</th>
                                                        <th>Kantor Pos</th>
                                                        <th>Email</th>
                                                        <th>Telepon</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no=1;
                                                    @endphp
                                                    @foreach ($data as $d)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td>{{$d->alamat}}</td>
                                                            <td>{{$d->kantor_pos}}</td>
                                                            <td>{{$d->email}}</td>
                                                            <td>{{$d->telepon}}</td>
                                                           
                                                            <td>
                                                                <button id="btn_edit" data-id="{{$d->id}}"
                                                                style="height: 30px; width:30px;"
                                                                class="mr-2 btn waves-effect waves-light btn-primary btn-icon"><i
                                                                    class="fa fa-edit"
                                                                    style="margin-left: 8px;"></i></button>
                                                            <button id="btn_hapus" data-id="{{$d->id}}"
                                                                style="height: 30px; width:30px;"
                                                                class="btn waves-effect waves-light btn-danger btn-icon"><i
                                                                    class="fa fa-trash"
                                                                    style="margin-left: 9px;"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Alamat</th>
                                                        <th>Kantor Pos</th>
                                                        <th>Email</th>
                                                        <th>Telepon</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="formulir" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Tambah Data</h5>
                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">Masukan Data Contact Us</h4>
                                        <form method="POST" action="{{route('contactus.insert')}}">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="alamat" class="form-control"
                                                        placeholder="Alamat" autocomplete="off">
                                                    @error('alamat')
                                                        <p class="text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Kantor Pos</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="kantor_pos" class="form-control"
                                                        placeholder="Kantor Pos" autocomplete="off">
                                                    @error('kantor_pos')
                                                        <p class="text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Email" autocomplete="off">
                                                    @error('email')
                                                        <p class="text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Telepon</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="telepon" class="form-control"
                                                        placeholder="Telepon" autocomplete="off" >
                                                    @error('telepon')
                                                        <p class="text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10"></div>
                                                <div class="col-sm-2">
                                                    <button 
                                                    type="submit" class="btn waves-effect waves-light btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready( function (){
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            })
            $('#contactus').DataTable();

            $('body').on('click','#btn_edit',function() {
                let dataId = $(this).data('id');
                let $url = "edit/"+dataId;
                $.get($url,function(data) {
                    $('#modal_title').html('Edit Data Contact Us');
                    $('#modal_body').html('');
                    $('#univ_modal').modal('show');
                    $('#modal_body').append(`
                    <div class="form-group row">
                        <input type="hidden" name="id" id="id" class="form-control" value="`+data.id+`" >
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" id="alamat" value="`+data.alamat+`" class="form-control"
                                placeholder="Alamat" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kantor Pos</label>
                        <div class="col-sm-10">
                            <input type="text" name="kantor_pos" id="kantor_pos" value="`+data.kantor_pos+`" class="form-control"
                                placeholder="Kantor Pos" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" value="`+data.email+`" class="form-control"
                                placeholder="Email" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" name="telepon" id="telepon" value="`+data.telepon+`" class="form-control"
                                placeholder="Telepon" autocomplete="off" >
                        </div>
                    </div>
                    `);
                });
            });
            $('body').on('click', '#btn_save', function () {
                let id = $('#formInput').find('#id').val();
                let formData = $('#formInput').serialize();
                $.ajax({
                    url: 'update/'+id,
                    type: 'POST',
                    data: formData,
                    success: function (data) {
                        $('#univ_modal').modal('hide');
                        Swal.fire({
                            title: 'Update!',
                            text: 'Data berhasl di perbaharui.',
                            icon: 'success',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Oke'
                            }).then((result) => {
                                location.reload();
                            });
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Ada yang salah!',
                        });
                    }
                });
            });
            $(document).on('click', '#btn_hapus', function () {
                let dataId = $(this).data('id');
                Swal.fire({
                title: 'Anda Yakin?',
                text: "Data ini mungkin terhubung ke tabel yang lain!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "delete/" + dataId,
                            type: 'delete',
                            success: function () {
                                Swal.fire({
                                    title: 'Terhapus!',
                                    text: 'Data berhasl di hapus.',
                                    icon: 'warning',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Oke'
                                }).then((result) => {
                                    location.reload();
                                });
                            },
                            error: function () {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Ada yang salah!',
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
