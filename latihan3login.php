<?php
    if (isset($_POST['btnSubmit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $tanggal_Lahir = $_POST["tanggal_lahir"];
        $program_Studi = $_POST["program_studi"];
        $alamat = $_POST["alamat"];
        $handphone = $_POST["handphone"];
        $jenis_kelamin = $_POST["jenis_kelamin"];

      // validasi atau operasi database apa pun yang diperlukan di sini

        // menampilkan pesan sukses JavaScript
        echo '<script>alert("Sign Up berhasil"); window.location.href = "latihan3login.php";</script>';

        exit(); 
    }

    else {
?>
<html>
    <body>
        <form action="" method="post">
            Name : <input type="text" name="name"><br>
            email : <input type="email" name="email"><br>
            password : <input type="password" name="password"><br>
            tanggal lahir : <input type="date" name="tanggal_lahir"><br>
            program studi : <select name="program_studi">
                <option value="" selected></option>
                <option value="business management">business management</option>
                <option value="System informasi">system informasi</option>
                <option value="psikologi">psikologi</option>
                <option value="teknik industri">teknik industri</option>
                <option value="bahasa inggris">bahasa inggris</option>
                <option value="ilmu komunikasi">ilmu komunikasi</option>
                <option value="ilmu komputer">ilmu komputer</option>
            </select><br>
            alamat : <input type="text" name="alamat"><br>
            handphone : <input type="text" name="handphone"><br>
            jenis kelamin :<input type="radio" name="jenis_kelamin" value="perempuan">perempuan
            <input type="radio" name="jenis_kelamin" value="lelaki">lelaki<br>
            <input name="btnSubmit" value="save" type="submit">
            <input name="btncancel" value="cancel" type="reset">
        </form>  
    </body>
</html>
<?php 
    }
?>
