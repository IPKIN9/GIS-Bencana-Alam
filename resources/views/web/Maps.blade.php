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
<div class="card-body">
    <div class="col-md-12 ml-auto mr-auto">
        <div class="mapcontainer">
            <div id="map" class="map-canvas" data-lat="40.748817" data-lng="-73.985428"
                style="height: 600px; position: relative; overflow: hidden;">
                <script>
                    var map = L.map('map').setView([-0.3802429425365326, 120.9966064497399], 8);
                
                        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=iVwxS42CVMlobjgLaPRM', {
                            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                        }).addTo(map);
                        var locations = [
                            @foreach ($data['marker_kecamatan'] as $d)
                            [`
                                <div class="card">
                                    <div class="card-body pt-0">
                                        <div class="row">
										<div class="col-12 col-stats">
											<div class="numbers">
												<p class="card-category" style="margin-bottom:-5px;">Kecamatan</p>
												<h4 class="card-title">{{$d->nama_kecamatan}}</h4>
											</div>
                                            <span><button class="btn btn-link mt-2">
											<span class="btn-label">
												<i class="fa fa-link"></i>
											</span>
											Info Lebih Lanjut
										</button></span>
										</div>
									</div>
                                    </div>
                                </div>
                            `, {{ $d->koordinat }}], 
                            @endforeach
                        ];
                        var greenIcon = L.icon({
                            iconUrl: '{{asset('web/assets/img/tinggi.png')}}',
                            iconSize:     [75, 50], // size of the icon
                        });
                        for (var i = 0; i < locations.length; i++) {
                            marker = new L.marker([locations[i][1], locations[i][2]],{icon: greenIcon})
                                .bindPopup(locations[i][0])
                                .addTo(map);
                        }
                </script>
            </div>
        </div>
    </div>
</div>
@endsection