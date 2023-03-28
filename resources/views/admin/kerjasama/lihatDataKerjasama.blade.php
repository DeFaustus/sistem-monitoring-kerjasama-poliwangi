@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Lihat Data Kerjasama</h4>
                        </div>
                        <div class="card-body">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form action="" class="">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" name="cari"
                                                class="form-control @error('cari') is-invalid @enderror"placeholder="Masukkan Nomor Mou / Nama Instansi">
                                            @error('cari')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <button class="btn btn-primary">Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomor Mou</th>
                                        <th scope="col">Nama Instansi</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Tanggal Mulai</th>
                                        <th scope="col">Tanggal Berakhir</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kerjasama as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a href="/download/{{ $item->nomor_mou }}">{{ $item->nomor_mou }}</a></td>
                                            <td>{{ $item->nama_instansi }}</td>
                                            <td>{{ $item->kategori->nama_kategori }}</td>
                                            <td>{{ $item->tgl_mulai }}</td>
                                            <td>{{ $item->tgl_berakhir }}</td>
                                            <td>{{ $item->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
