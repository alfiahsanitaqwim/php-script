<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h2>Biodata Anggota</h2>
    <form>     
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="nama" class="form-control"><br><br>
            
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
            
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat"><br><br>
            
        <label for="program_pelatihan">Program Pelatihan:</label>
        <select id="program_pelatihan" name="program_pelatihan">
            <option value="null"></option>
            <option value="web_design">Junior Web Developer</option>
            <option value="programming">Digital marketing</option>
            <option value="data_science">Content Creator</option>
            <option value="digital_marketing">Desainer Multimedia Muda</option>
        </select><br><br>
            
        <label for="tahun">Tahun:</label>
        <select id="tahun" name="tahun">
            <?php
            // $tahun_sekarang = date("Y");
            for ($tahun = 2000; $tahun <= 2023; $tahun++) {
                echo "<option value=\"$tahun\"></option>";
                echo "<option value=\"$tahun\">$tahun</option>";
            }
            ?>
        </select><br><br>      
            
        <input type="submit" value="Daftar" name="daftar">  
    </form>
</body>
</html>