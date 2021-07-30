@extends('layout.Website')
@section('content')
<div class="row row-card-no-pd mt--2">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="flaticon-chart-pie text-warning"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Jumlah Bencana</p>
                            <h4 class="card-title">{{$data['jumlah_bencana']}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="flaticon-coins text-success"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Total Kerugian</p>
                            <h4 class="card-title">{{$data['total_kerugian']}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="
                            flaticon-placeholder text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Jumlah Kabupaten</p>
                            <h4 class="card-title">{{$data['jumlah_kabupaten']}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="
                            flaticon-signs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Jumlah Kecamatan</p>
                            <h4 class="card-title">{{$data['jumlah_kecamatan']}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Kasus Terbaru</div>
            </div>
            <div class="card-body pb-0">
                @foreach ($data['kasus_terbaru'] as $d)
                <div class="d-flex">
                    <div class="flex-1 pt-1 ml-2">
                        <h6 class="fw-bold mb-1">{{$d->bahaya_rol->jenis_bahaya_rol->nama_jenis_bahaya}}</h6>
                        <small class="text-muted">{{date('d-m-Y', strtotime($d->created_at))}}</small>
                    </div>
                    <div class="d-flex ml-auto align-items-center">
                        <h5 class="text-info fw-bold">{{$d->bahaya_rol->kelas_rol->nama_kelas}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title fw-mediumbold">Jumlah Penduduk Terpapar</div>
                <div class="card-list">
                    @foreach ($data['jumlah_terpapar'] as $d)
                    <div class="item-list">
                        <div class="info-user ml-3">
                            <div class="username">{{$d->jenis_bahaya_rol->nama_jenis_bahaya}}</div>
                            <div class="status">{{$d->total_luas_bahaya}} km</div>
                        </div>
                        <div class="info-user">
                            <div class="status">{{date('d-m-Y', strtotime($d->created_at))}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-primary bg-primary-gradient">
            <div class="card-body">
                <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Sistem Real Time</h4>
                <h1 class="mb-4 fw-bold">GIS Dampak Bencana</h1>
                <h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Data 2016-2020</h4>
            </div>
        </div>
    </div>
</div>
@endsection