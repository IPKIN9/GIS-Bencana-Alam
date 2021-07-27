@extends('layout.Dashboard')
@section('title')
Tabel Contact Us
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Contact Us</h4>
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
                                        <h5>Table Contact Us</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table">
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
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
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
                                        <h4 class="sub-title">Masukan Data Contact Us</h4>
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="alamat" class="form-control"
                                                        placeholder="Alamat" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Kantor Pos</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="kantor_pos" class="form-control"
                                                        placeholder="Kantor Pos" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Email" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Telepon</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="telepon" class="form-control"
                                                        placeholder="Telepon" autocomplete="off">
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