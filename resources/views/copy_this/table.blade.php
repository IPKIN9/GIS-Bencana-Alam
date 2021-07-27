@extends('layout.Dashboard')
@section('title')
Page Table Contoh
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data (nama data)</h4>
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
                                        <h5>Table (nama tabel)</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button
                                                                class="btn waves-effect waves-light btn-primary btn-icon mr-1"><i
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
                                        <h4 class="sub-title">Masukan Data (nama data)</h4>
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Simple Input</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Read only</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="You can't change me" readonly="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Disable Input</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text"
                                                        disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Predefine
                                                    Input</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        value="Enter yout content after me">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Select Box</label>
                                                <div class="col-sm-10">
                                                    <select name="select" class="form-control">
                                                        <option value="opt1">Select One Value Only</option>
                                                        <option value="opt2">Type 2</option>
                                                        <option value="opt3">Type 3</option>
                                                        <option value="opt4">Type 4</option>
                                                        <option value="opt5">Type 5</option>
                                                        <option value="opt6">Type 6</option>
                                                        <option value="opt7">Type 7</option>
                                                        <option value="opt8">Type 8</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Round Input</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-round"
                                                        placeholder=".form-control-round">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Maximum
                                                    Length</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Content must be in 6 characters" maxlength="6">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Disable
                                                    Autocomplete</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Autocomplete Off" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Static Text</label>
                                                <div class="col-sm-10">
                                                    <div class="form-control-static">Hello !... This is
                                                        static text
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Color</label>
                                                <div class="col-sm-10">
                                                    <input type="color" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Upload File</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Textarea</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="5" cols="5" class="form-control"
                                                        placeholder="Default textarea"></textarea>
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