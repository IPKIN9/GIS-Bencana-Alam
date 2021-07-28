@extends('layout.Dashboard')
@section('title')
Page Tabel Kabupaten
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block tab-icon">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
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
                            <h4>Data Kabupaten</h4>
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
                                        <h5>Table Kabupaten</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table id="kabupaten" class="display" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Kabupaten</th>
                                                        <th>Created_at</th>
                                                        <th>Updated_at</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no = 1;
                                                    @endphp
                                                    @foreach($data['kabupaten'] as $d)
                                                    <tr>
                                                        <td>{{ $no++}}</td>
                                                        <td>{{ $d->nama_kabupaten}}</td>
                                                        <td>{{ $d->created_at}}</td>
                                                        <td>{{ $d->updated_at}}</td>
                                                        <td>
                                                            <button id="btn_edit" data-id="{{$d->id}}"
                                                                style="height: 30px; width: 30px;"
                                                                class="mr-2 btn waves-effects weves-light btn-primary btn-icon">
                                                                <i class="fa fa-edit" style="margin-left: 8px;"></i>
                                                            </button>
                                                            <button id="btn_hapus" data-id="{{$d->id}}"
                                                                style="height: 30px; width: 30px;"
                                                                class="btn waves-effects weves-light btn-danger btn-icon">
                                                                <i class="fa fa-trash" style="margin-left: 9px;"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Kabupaten</th>
                                                        <th>Created_at</th>
                                                        <th>Updated_at</th>
                                                        <th>Options</th>
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
                                        <h4 class="sub-title">Masukan Nama Kabupaten</h4>
                                        <form method="post" action="{{ route('kabupaten.insert')}}">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Kabupaten</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Kabupaten"
                                                        autocomplete="off" name="nama_kabupaten">
                                                    @error('nama_kabupaten')
                                                    <p class="text text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10"></div>
                                                <div class="col-sm-2">
                                                    <button class="btn waves-effect waves-light btn-primary"
                                                        type="submit">Simpan</button>
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
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $('#kabupaten').DataTable();

        $('body').on('click','#btn_edit',function(){
            let dataId = $(this).data('id');
            let $url = "edit/"+dataId;
            $.get($url,function(data){
                $('#modal_title').html('Edit data Kecamatan');
                $('#modal_body').html('');
                $('#univ_modal').modal('show');
                $('#modal_body').append(`
                <div class="form-group row">
                    <input type="hidden" id="id" name="id" value="`+ data.id +`">
                    <label class="col-sm-2 col-form-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <input value="`+ data.nama_kabupaten +`" name="nama_kabupaten" type="text" class="form-control"
                            placeholder="Autocomplete Off" autocomplete="off">
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
            })
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
                    })
                }
            })
        });
    } );
</script>
@endsection