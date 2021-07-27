@extends('layout.Dashboard')
@section('title')
Tabel kelas
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data (Kelas)</h4>
            </div>
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
                                        <h5>Table (Kelas)</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="display" id="contoh" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama kelas</th>
                                                        <th>Created_at</th>
                                                        <th>Update_at</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no=1;
                                                    @endphp
                                                    @foreach ($data as $d)
                                                    <td>{{$no++}}</td>
                                                    <td>{{$d->nama_kelas}}</td>
                                                    <td>{{$d->created_at}}</td>
                                                    <td>{{$d->updated_at}}</td>
                                                    <td>
                                                        <button style="height: 30px; width:30px;"
                                                            class="mr-2 btn waves-effect waves-light btn-primary btn-icon"><i
                                                                class="fa fa-edit"
                                                                style="margin-left: 9px;"></i></button>
                                                        <button style="height: 30px; width:30px;"
                                                            class="btn waves-effect waves-light btn-danger btn-icon"><i
                                                                class="fa fa-trash"
                                                                style="margin-left: 11px;"></i></button>
                                                    </td>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama kelas</th>
                                                        <th>Created_at</th>
                                                        <th>Update_at</th>
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
                                        <h4 class="sub-title">Masukan Data (Kelas)</h4>
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Kelas</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="kelas" class="form-control"
                                                        placeholder="Nama kelas" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10"></div>
                                                <div class="col-sm-2">
                                                    <button
                                                        class="btn waves-effect waves-light btn-primary">Simpan</button>
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
    $(document).ready(function (){
            $('#contoh').DataTable();
        });
</script>
@endsection