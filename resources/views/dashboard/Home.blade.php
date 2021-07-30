@extends('layout.Dashboard')
@section('title')
Welcome To Dashboard
@endsection
@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-purple">{{$data['kasus']}}</h4>
                        <h6 class="text-muted m-b-0">Total Kasus</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-bar-chart f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-purple">
                <div class="row align-items-center">
                    <div class="col-6">
                        <p class="text-white m-b-0"></p>
                    </div>
                    <div class="col-6 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i><span style="color: white;"> Kasus</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-green">{{$data['bencana']}}</h4>
                        <h6 class="text-muted m-b-0">Jumlah Bencana</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-file-text-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-green">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0"></p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-red">{{$data['kasus_today']}}</h4>
                        <h6 class="text-muted m-b-0">Kasus Hari Ini</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-calendar-check-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-red">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0"></p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h4 class="text-c-blue">{{$data['penduduk']}}</h4>
                        <h6 class="text-muted m-b-0">Jumlah Penduduk Terpapar</h6>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-blue">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0"></p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Kasus Terbaru</h5>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Kabupaten</th>
                                <th>Kecamatan</th>
                                <th>Jenis Bahaya</th>
                                <th class="text-right">Tingkat Kerusakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['kasus_list'] as $d)
                            <tr>
                                <td>{{$d->kabupaten_rol->nama_kabupaten}}</td>
                                <td>{{$d->kecamatan_rol->nama_kecamatan}}</td>
                                <td>{{$d->bahaya_rol->jenis_bahaya_rol->nama_jenis_bahaya}}</td>
                                <td class="text-right"><label class="label @if ($d->bahaya_rol->kelas_rol->nama_kelas == 'Tinggi')
                                    label-danger
                                        @endif
                                        @if ($d->bahaya_rol->kelas_rol->nama_kelas == 'Sedang')
                                    label-warning
                                        @endif
                                        @if ($d->bahaya_rol->kelas_rol->nama_kelas == 'Rendah')
                                    label-success
                                        @endif">{{$d->bahaya_rol->kelas_rol->nama_kelas}}</label>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection