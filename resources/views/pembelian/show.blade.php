@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control " name="nama_pembeli" value="{{ $pembelian->nama_pembeli }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Pembelian</label>
                            <input type="date" class="form-control " name="tanggal_pembelian" value="{{ $pembelian->tanggal_pembelian }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control " name="nama_barang" value="{{ $pembelian->nama_barang }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="number" class="form-control " name="harga_satuan" value="{{ $pembelian->harga_satuan }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Barang</label>
                            <input type="number" class="form-control " name="jumlah_barang" value="{{ $pembelian->jumlah_barang }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Total Harga</label>
                            <input type="number" class="form-control " name="total_harga" value="{{ $pembelian->total_harga }}" readonly>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('pembelian.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
