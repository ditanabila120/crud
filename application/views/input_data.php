<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <center>
        <h1>Input Data Mahasiswa</h1>
    </center>
    <form action="<?php echo base_url(). 'index.php/kampus/tambah_aksi'; ?> " method="post" enctype="multipart/form_data">
        <table style="margin:20px auto;">
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>pekerjaan</td>
            <td><input type="text" name="pekerjaan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="Submit" value="Tambah"> <input type="reset" value="batal"> <?php echo anchor('kampus/index','<input type=button value=kembali>'); ?></td>
            </tr>
        </table>
    </form>
</body>
</html>