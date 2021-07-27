@extends('layout.Dashboard')
@section('title')
Jenis Bahaya
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Jenis Bahaya</h4>
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
                                        <h5>Table Jenis Bahaya</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Jenis Bahaya</th>
                                                        <th>Created</th>
                                                        <th>Updated</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <th></th>
                                                        <th></th>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button
                                                                class="btn waves-effect waves-light btn-primary btn-icon"><i
                                                                    class="fa fa-edit"
                                                                    style="margin-left: 9px;"></i></button>
                                                            <button
                                                                class="btn waves-effect waves-light btn-danger btn-icon"><i
                                                                    class="fa fa-trash"
                                                                    style="margin-left: 11px;"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
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
                                        <h4 class="sub-title">Masukan Data Jenis Bahaya</h4>
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Jenis Bahaya</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Nama Jenis Bahaya" autocomplete="off">
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