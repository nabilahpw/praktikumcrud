<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<hr />
<center>

    @if(session('pesan'))
    <div class="alert alert-success">
        {{session('pesan')}}
    </div>
    @endif

    <h2>TABEL MAHASISWA</h2>
    <hr />

    <section>
        <!--Table-->
        <table class="table table-striped w-auto">
            <thead class=thead-dark>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>UMUR</th>
                    <th>EMAIL</th>
                    <th>ALAMAT</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $num=1;
        foreach($dataAll as $datax) {
            if (($num%2)==1) {
                echo "<tr class='table-info'>";}else echo "<tr>";
                    echo "<th scope='row'>$num</th>";
                    echo "<td>";
                    echo $datax->nim;
                    echo "</td>";
                    echo "<td>";
                    echo $datax->nama;
                    echo "</td>";
                    echo "<td>";
                    echo $datax->umur;
                    echo "</td>";
                    echo "<td>";
                    echo $datax->email;
                    echo "</td>";
                    echo "<td>";
                    echo $datax->alamat;
                    echo "</td>";
                    echo "<td>";
                    echo $datax->created_at;
                    echo "</td>";
                    echo "<td>";
                    echo $datax->updated_at;
                    echo "</td>";

                    echo "<td>";
                    echo "<a href=/delete/".$datax->nim." onclick=\"return confirm('Yakin mau dihapus?');\" class='btn btn-danger'> HAPUS </a>";
                    echo "<a href=/update/".$datax->nim." onclick=\"return confirm('Yakin mau diedit/diupdate?');\" class='btn btn-success'> UPDATE </a>";

                    echo "<td>";
                        
                        echo"<tr>";
                    $num++;
                }
                ?>
            </tbody>
        </table>
    </section>
    <a href=/create class="btn btn-success"> Tambah Data</a>
</center>
<hr />