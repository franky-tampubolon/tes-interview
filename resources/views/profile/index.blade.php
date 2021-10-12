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
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
                        @if(!@empty($user->profile))
                        <table>
                            <tr>
                                <td>username</td>
                                <td>:</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td>{{$user->profile->pekerjaan}}</td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td>{{$user->profile->nama_lengkap}}</td>
                            </tr>
                            <tr>
                                <td>No Telp </td>
                                <td>:</td>
                                <td>{{$user->profile->no_telp}}</td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td>{{$user->profile->pendidikan}}</td>
                            </tr>
                            <tr>
                                <td>Alamat KTP</td>
                                <td>:</td>
                                <td>{{$user->profile->alamat_ktp}}</td>
                            </tr>
                        </table>

                        <div>
                            <a href="{{route('profile.edit', $user->profile->id)}}" class="btn btn-sm btn-outline-primary">Edit Profile</a>
                            <form action="{{route('profile.destroy', $user->profile->id)}}" class="d-inline" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="confirm('Kamu Yakin menghapus profile kamu?')">Hapus</button>
                            </form>
                        </div>
                        @else
                            <p>Data Profile kamu belum diisi.</p>
                            <a href="{{route('profile.create')}}" class="btn btn-sm btn-info">Edit Profile</a>
                        @endif
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
