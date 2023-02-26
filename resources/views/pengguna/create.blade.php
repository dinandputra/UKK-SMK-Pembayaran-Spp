<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Pembayaran SPP | SMK Telkom</title>
    <link rel="stylesheet" href="{{asset ('css/dashboard/style_adminHome.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <a href="#">Data Pengguna</a>

        <form method="POST" action="/logout" class="logout">
          @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    </header>

    <aside>
        <ul>
            <li>
                <a href="{{ url('/admin/home') }}">Dashboard</a>
            </li>

            <li>
                <a href="{{ url('/pengguna/index') }}">Data Pengguna</a>
            </li>

            <li>
                <a href="{{ url('/kelas/index') }}">Data Kelas</a>
            </li>

            <li>
                <a href="{{ url('/siswa/index') }}">Data Siswa</a>
            </li>

            <li>
                <a href="{{ url('/spp/index') }}">Data Spp</a>
            </li>

            <li>
                <a href="">Entry Pembayaran</a>
            </li>

            <li>
                <a href="">History Pembayaran</a>
            </li>

        </ul>
    </aside>

    <div class="content">
        <h1>
           <center>Tambah Data Pengguna</center>
        </h1>
        <br>

        <form method="POST" action="{{url('/pengguna/index')}}">
         @csrf
            <label><b> ID </b></label>
            <input type="text" name="id_petugas" class="form-control" >

            <label><b> Username </b></label>
            <input type="text" name="username" class="form-control" >

            <label><b> Password </b></label>
            <input type="text" name="password" class="form-control" required autocomplete="new-password">

            <label><b> Nama </b></label>
            <input type="text" name="nama_petugas" class="form-control" >

            <label><b> Hak Akses </b></label>
            <select name="level" class="form-control" >
                <option value="0" selected="selected"> User </option>
                <option value="1" > Petugas </option>
                <option value="2" > Admin </option>
            </select>
            <br>
        
            <input type="submit" value="simpan" name="simpan" class="btn btn-success">  
        </form>
        
    </div>
    
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>