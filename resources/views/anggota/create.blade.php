@extends('layout.app')

@section('title','anggota')

@section('content')

<section class="section">
    <div class="section-header">
        <h4>Anggota</h4>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Anggota</h4>
            </div>

            <div class="card-body">
                <form action="{{route('anggota.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="kode">Kode</label>
                            <input type="text" name="kode" id="class" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="class" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select type="jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="L">Laki Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="telpon">Telpon</label>
                            <input type="number" name="telpon" id="telpon" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="alamat">Alamat</label>
                           <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="foto">Foto</label>  
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                    </div>

                    <button type="sumbit" class="btn btn-success"><i class="fa fa-save"></i>Simpan</button>
                </form>

            </div>

        </div>
</section>
@endsection