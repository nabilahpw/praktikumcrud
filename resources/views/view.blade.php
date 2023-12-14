<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


<center>
    <h2>Data Mahasiswa Berhasil Disimpan</h2>
    <hr />
    <table class="table table-primary" style="width:50%; table-align:center;">
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>NIM</td>
            <td>{{$data['nim']}}</td>
        </tr>
        <tr>
        <th scope="row">2</th>
            <td>NAMA</td>
            <td>{{$data['nama']}}</td>
        </tr>
        <tr>
        <th scope="row">3</th>
            <td>UMUR</td>
            <td>{{$data['umur']}}</td>
        </tr>
        <tr>
        <th scope="row">4</th>
            <td>EMAIL</td>
            <td>{{$data['email']}}</td>
        </tr>
        <tr>
        <th scope="row">5</th>
            <td>ALAMAT</td>
            <td>{{$data['alamat']}}</td>
        </tr>
    </tbody>
    </table>
</center>
<hr />
<center>
    <a href=/read class="btn btn-success"> Tampilkan Data</a>
</center>