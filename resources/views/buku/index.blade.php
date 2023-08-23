@extends('buku.core')
@section('content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"></div></div><div class="col-sm-12 col-md-6">
                                
                                </div></div><div class="row"><div class="col-sm-12">
                                <a href="/buku/create" class="btn btn-success ">
                                        <i class="fas fa-check"></i>
                                        Tambah Data
                                    </a>    
                                <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 101px;" aria-label="Name: activate to sort column descending" aria-sort="ascending">Judul</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 152px;" aria-label="Position: activate to sort column ascending">Pengarang</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 72px;" aria-label="Office: activate to sort column ascending">Deskripsi</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">Tahun Terbit</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">Opsi</th>
                                    </thead>
                                    <tbody>
                                        @foreach($bukus as $b)
                                    <tr class="odd">
                                            <td class="sorting_1">{{$b->judul}}</td>
                                            <td>{{$b->pengarang}}</td>
                                            <td>{{$b->deskripsi}}</td>
                                            <td>{{$b->tahun_terbit}}</td>
                                            <td>
                                            <a href="/buku/{{$b->id}}/edit" class="btn btn-success ">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        edit
                                    </a>  |
                                    <a href="/buku/{{$b->id}}/hapus"  class="btn btn-danger ">
                                    <i class="fas fa-trash"></i>    
                                        hapus
                                    </a>  | 
                                    <a href="/buku/{{$b->id}}"  class="btn btn-info ">
                                    <i class="fas fa-info-circle"></i>
                                       lihat
                                    </a> 
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table></div>
                        </div>
                    </div>

                </div>
@endsection