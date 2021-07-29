@extends('layout.Dashboard')
@section('title')
Page Tabel Kasus
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
                            <h4>Data Kasus</h4>
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
                                        <h5>Table Kasus</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table id="tabel_kasus" class="display" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Kabupaten/Kota</th>
                                                        <th>Nama Kecamatan</th>
                                                        <th>Jenis Bahaya</th>
                                                        <th>Luas Bahaya</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no = 1;
                                                    @endphp
                                                    @foreach($data['kasus'] as $d)
                                                    <tr>
                                                        <td>{{$no++}}</td>
                                                        <td>{{$d->kabupaten_rol->nama_kabupaten}}</td>
                                                        <td>{{$d->kecamatan_rol->nama_kecamatan}}</td>
                                                        <td>{{$d->bahaya_rol->jenis_bahaya_rol->nama_jenis_bahaya}}
                                                        </td>
                                                        <td>{{$d->bahaya_rol->total_luas_bahaya}} Km</td>
                                                        <td>
                                                            <button id="btn_edit" data-id="{{$d->id}}"
                                                                style="height: 30px; width: 30px;"
                                                                class="mr-2 btn waves-effects weves-light btn-primary btn-icon">
                                                                <i class="fa fa-eye" style="margin-left: 8px;"></i>
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
                                                        <th>Nama Kabupaten/Kota</th>
                                                        <th>Nama Kecamatan</th>
                                                        <th>Jenis Bahaya</th>
                                                        <th>Luas Bahaya</th>
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
                                        <form method="POST" action="{{route('kasus.insert')}}">
                                            @csrf
                                            <input type="hidden" name="code_bahaya" id="code_bahaya">
                                            <input type="hidden" name="id_bahaya" id="id_bahaya">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Kabupaten</label>
                                                <div class="col-sm-10">
                                                    <select id="sl_kabupaten" name="id_kabupaten" class="form-control">
                                                        <option selected disabled>--Pilih Kabupaten--</option>
                                                        @foreach ($data['kabupaten'] as $d)
                                                        <option data-id="{{$d->d}}" value="{{$d->id}}">
                                                            {{$d->nama_kabupaten}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('id_kabupaten')
                                                    <p class="text text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Kecamatan</label>
                                                <div class="col-sm-10">
                                                    <select id="sl_kecamatan" disabled name="id_kecamatan"
                                                        class="form-control">
                                                        <option selected disabled>--Pilih Kecamatan--</option>
                                                    </select>
                                                    @error('id_kecamatan')
                                                    <p class="text text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row" id="proses_selesai">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Detail Bencana</h5>
                                    </div>
                                    <div class="card-block" id="detail_bencana">

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
        
        $('#tabel_kasus').DataTable();
        $( "#sl_kabupaten" ).change(function() {
           let dataId = $('#sl_kabupaten').find(":selected").val();
            let url = "search/"+dataId;
            $.get(url,function(data){
                $("#sl_kecamatan").removeAttr("disabled");
                $("#sl_kecamatan").html('');
                $("#sl_kecamatan").html('<option selected disabled>--Pilih Kecamatan--</option>');
                $.each(data, function( i, data ) {
                    $("#sl_kecamatan").append(`
                    <option value="`+ data.id +`">`+data.nama_kecamatan+`</option>
                    `);
                });
                
                $('#detail_bencana').html('');
                $('#detail_bencana').append(`
                <form id="form_detail" class="form-material">
                    @csrf
                    <div id="lock_detail">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Jenis Bahaya</label>
                                        <div class="col-sm-10">
                                            <select name="id_jenis_bahaya" class="form-control">
                                                <option selected disabled>--Pilih Jenis Bahaya--</option>
                                                @foreach ($data['jenis_bahaya'] as $d)
                                                <option data-id="{{$d->d}}" value="{{$d->id}}">
                                                    {{$d->nama_jenis_bahaya}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Total Luas Bahaya</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="total_luas_bahaya"
                                                class="form-control" placeholder="Autocomplete Off"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Kelas Bahaya</label>
                                        <div class="col-sm-10">
                                            <select name="id_kelas" class="form-control">
                                                <option disabled selected>--Pilih Kelas Bahaya--
                                                </option>
                                                @foreach ($data['kelas'] as $d)
                                                <option data-id="{{$d->d}}" value="{{$d->id}}">
                                                    {{$d->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Penduduk Yang
                                            Terpapar</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="jumlah_penduduk_terpapar"
                                                id="jumlah_penduduk_terpapar" class="form-control"
                                                placeholder="Autocomplete Off" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Total Kerugian</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="total_kerugian"
                                                class="form-control" placeholder="Autocomplete Off"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Kelas Kerugian</label>
                                        <div class="col-sm-10">
                                            <select name="kelas_kerugian"
                                                class="form-control">
                                                <option disabled selected>--Pilih Kelas Kerugian--
                                                </option>
                                                @foreach ($data['kelas'] as $d)
                                                <option data-id="{{$d->d}}" value="{{$d->id}}">
                                                    {{$d->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Kelas Kerusakan</label>
                                        <div class="col-sm-10">
                                            <select name="kelas_kerusakan"
                                                class="form-control">
                                                <option disabled selected>--Pilih Kelas Kerusakan--
                                                </option>
                                                @foreach ($data['kelas'] as $d)
                                                <option data-id="{{$d->d}}" value="{{$d->id}}">
                                                    {{$d->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-sm-4 mt-4">
                                <button class="btn waves-effect waves-light btn-primary"
                                    type="button" id="btn_selesai">Selesai</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form id="form_id">
                    <input name="id" id="id_del" value="" type="hidden">
                </form>
                `);
            });
        });

        $('body').on('click', '#btn_selesai', function () {
            let formData = $('#form_detail').serialize();
            $.ajax({
                url: 'detail/post',
                type: 'POST',
                data: formData,
                success: function (data) {
                    $('#code_bahaya').val(data.code);
                    $('#id_bahaya').val(data.id);
                    $('#id_del').val(data.id);
                    $("#lock_detail :input").prop("disabled", true);
                    $('#btn_selesai').removeClass('btn-primary');
                    $('#btn_selesai').addClass('btn-warning');
                    $('#btn_selesai').html('Reset');
                    $('#btn_selesai').attr('id','btn_reset');
                    $('#proses_selesai').append(`
                    <div class="col-sm-4">
                        <button class="btn waves-effect waves-light btn-primary"
                            type="submit">Simpan</button>
                    </div>
                    `);
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

        $('body').on('click','#btn_reset',function()
        {
            let dataId = $('#form_id').find('#id_del').val();
            $.ajax({
                url: "delete/detail/" + dataId,
                type: 'delete',
                success: function () {
                    $("#lock_detail :input").prop("disabled", false);
                    $('#btn_reset').removeClass('btn-warning');
                    $('#btn_reset').addClass('btn-primary');
                    $('#btn_reset').html('Selesai');
                    $('#btn_reset').attr('id','btn_selesai');
                    $('#proses_selesai').html('');
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

        $('body').on('click','#btn_edit',function(){
            let dataId = $(this).data('id');
            let $url = "edit/"+dataId;
            $.get($url,function(data){
                $('#modal_title').html('Edit Data Kasus');
                $('#modal_body').html('');
                $('#univ_modal').modal('show');
                $('#modal_body').append(`
                    <div class="card-block" style="margin-left:50px;">
                        <input type="hidden" id="id_bahaya" value="`+ data.id_bahaya +`" name="id">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Nama Kabupaten</label>
                            <div class="col-sm-10">
                                <select disabled name="id_kabupaten" class="form-control">
                                    @foreach ($data['kabupaten'] as $d)
                                    <option data-id="{{$d->d}}" value="{{$d->id}}">
                                        {{$d->nama_kabupaten}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Nama Kecamatan</label>
                            <div class="col-sm-10">
                                <select disabled name="id_kecamatan"
                                    class="form-control">
                                    @foreach ($data['kecamatan'] as $d)
                                    <option data-id="{{$d->d}}" value="{{$d->id}}">
                                        {{$d->nama_kecamatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Jenis Bahaya</label>
                                        <div class="col-sm-10">
                                            <select id="id_jenis_bahaya" name="id_jenis_bahaya" class="form-control">
                                                <option selected disabled>--Pilih Jenis Bahaya--</option>
                                                @foreach ($data['jenis_bahaya'] as $d)
                                                <option data-id="{{$d->d}}" value="{{$d->id}}">
                                                    {{$d->nama_jenis_bahaya}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Total Luas Bahaya</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="`+ data.bahaya_rol.total_luas_bahaya +`" name="total_luas_bahaya"
                                                class="form-control" placeholder="Autocomplete Off"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Kelas Bahaya</label>
                                        <div class="col-sm-10">
                                            <select name="id_kelas" id="id_kelas" class="form-control">
                                                <option disabled selected>--Pilih Kelas Bahaya--
                                                </option>
                                                @foreach ($data['kelas'] as $d)
                                                <option data-id="{{$d->d}}" value="{{$d->id}}">
                                                    {{$d->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Penduduk Yang
                                            Terpapar</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="jumlah_penduduk_terpapar"
                                                value="`+ data.bahaya_rol.jumlah_penduduk_terpapar +`" class="form-control"
                                                placeholder="Autocomplete Off" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Total Kerugian</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="total_kerugian" value="`+ data.bahaya_rol.total_kerugian +`"
                                                class="form-control" placeholder="Autocomplete Off"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Kelas Kerugian</label>
                                        <div class="col-sm-10">
                                            <select name="kelas_kerugian" id="kelas_kerugian"
                                                class="form-control">
                                                <option disabled selected>--Pilih Kelas Kerugian--
                                                </option>
                                                @foreach ($data['kelas'] as $d)
                                                <option data-id="{{$d->d}}" value="{{$d->id}}">
                                                    {{$d->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Kelas Kerusakan</label>
                                        <div class="col-sm-10">
                                            <select name="kelas_kerusakan" id="kelas_kerusakan"
                                                class="form-control">
                                                <option disabled selected>--Pilih Kelas Kerusakan--
                                                </option>
                                                @foreach ($data['kelas'] as $d)
                                                <option data-id="{{$d->d}}" value="{{$d->id}}">
                                                    {{$d->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `);  
                $('#id_kabupaten').val(data.id_kabupaten);        
                $('#id_kecamatan').val(data.id_kecamatan); 
                $('#id_jenis_bahaya').val(data.bahaya_rol.id_jenis_bahaya);   
                $('#id_kelas').val(data.bahaya_rol.id_kelas);   
                $('#kelas_kerugian').val(data.bahaya_rol.kelas_kerugian);   
                $('#kelas_kerusakan').val(data.bahaya_rol.kelas_kerusakan);   
            });
        });

        $('body').on('click', '#btn_save', function () {
            let id = $('#formInput').find('#id_bahaya').val();
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