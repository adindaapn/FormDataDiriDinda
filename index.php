<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>From kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="" action="koneksi.php" method="post">
    <center><table>
        <h2><center> FROM KONTAK MAHASISWA</center></h2>
        <font face=" times new roman" size="5">
            <center><table border="0"></center>
        </font>

        <tr>
            <td> NIM </td>
            <td> : </td>
            <td><input type="text" name="NIM" size="30"></td>
        </tr>
        
        <tr>
            <td> NAMA </td>
            <td> : </td>
            <td><input type="text" name="nama" size="30"></td>
        </tr>

        <tr>
            <td> KELAS </td>
            <td> : </td>
            <td><select class="filed" name="kelas"  required>
                <option value="Pilih kelas"> PILIH KELAS </option>
                <option value="T3a"> T3A </option>
                <option value="T3b"> T3B </option>
                <option value="T3c"> T3C </option>
                <option value="T3d"> T3D </option>
                <option value="T3e"> T3E </option>
                <option value="T3f"> T3F </option>
                <option value="T3h"> T3G </option>
            </select></td>
        </tr>

        <tr>
            <td> EMAIL </td>
            <td> : </td>
            <td><input type="email" name="email" size="30"></td>
        </tr>

        <tr>
            <td> JENIS KELAMIN </td>
            <td> : </td>
            <td><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
        </td>
        </tr>

        <tr>
            <td> TANGGAL LAHIR </td>
            <td> : </td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>

        <tr>
            <td> AGAMA </td>
            <td> : </td>
            <td><select class="fieled" name="agama" required>
                <option value="islam" > Islam </option>
                <option value="kristen"> Kristen </option>
                <option value="hindu"> Hindu </option>
                <option value="budha"> Budha </option>
            </select></td>
        </tr>

        <tr>
            <td> PESAN </td>
            <td> : </td>
            <td><textarea name="pesan" cols="30" rows="6"></textarea></td>
        </tr>
    
    </center></table>
        <button type="submit" name="submit" value="submit"> Submit </button>

</form>
</body>
</html>
