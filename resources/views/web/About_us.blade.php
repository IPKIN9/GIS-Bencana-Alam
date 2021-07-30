@extends('layout.Website')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('web/assets/img/maps.png') }}" class="img-thumbnail" alt="Cinque Terre">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-post card-round">
            <img class="card-img-top" src="{{ asset('web/assets/img/blogpost.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex">
                    <div class="info-post ml-2">
                        <p class="username">Geographic Information System</p>
                        <p class="date text-muted">Sulawesi Tengah</p>
                    </div>
                </div>
                <div class="separator-solid"></div>
                <h3 class="card-title">
                    <a href="#">
                        Tentang Kami
                    </a>
                </h3>
                <p class="card-text">{{$data['webdesc']->deskripsi}}</p>
                <div class="separator-solid"></div>
                <div class="mb-4">
                    <h4>Alamat</h4><span>{{$data['contact']->alamat}}</span>
                </div>
                <div class="card-footer">
                    <div class="row user-stats text-center">
                        <div class="col">
                            <div class="number">Pos</div>
                            <div class="title">{{$data['contact']->kantor_pos}}</div>
                        </div>
                        <div class="col">
                            <div class="number">Email</div>
                            <div class="title">{{$data['contact']->email}}</div>
                        </div>
                        <div class="col">
                            <div class="number">Telepon</div>
                            <div class="title">{{$data['contact']->telepon}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection