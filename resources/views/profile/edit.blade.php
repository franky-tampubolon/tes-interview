<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Profile User</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('profile.update', $profile->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_lengkap">Nama lengkap</label>
                                <input type="text" value="{{$profile->nama_lengkap}}" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror">
                                @error('nama_lengkap')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" value="{{$profile->pekerjaan}}" name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror">
                                @error('pekerjaan')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat KTP</label>
                                <input type="text" value="{{$profile->alamat_ktp}}" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No Telepon</label>
                                <input type="text" value="{{$profile->no_telp}}" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                                @error('no_telp')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan Terakhir</label>
                                <select name="pendidikan" id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror">
                                    <option value="">--Pilih Salah Satu--</option>
                                    <option value="1" @if($profile->pendidikan === "1") selected @endif>SD</option>
                                    <option value="2" @if($profile->pendidikan === "2") selected @endif>SMP</option>
                                    <option value="3" @if($profile->pendidikan === "3") selected @endif>SMA</option>
                                    <option value="4" @if($profile->pendidikan === "4") selected @endif>Diploma</option>
                                    <option value="5" @if($profile->pendidikan === "5") selected @endif>Sarjana</option>
                                    <option value="6" @if($profile->pendidikan === "6") selected @endif>Magister</option>
                                    <option value="7" @if($profile->pendidikan === "7") selected @endif>Doktor</option>
                                </select>
                                @error('pendidikan')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
