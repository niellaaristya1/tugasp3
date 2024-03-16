<html>
    <body>

    <form action="Formprosesing.php" method="post">
Judul Buku : <input type="text" name="Judul_Buku"><br>

Kategori Buku : <select name="Kategori_Buku">
            <option value="" selected></option>
            <option value="Non-Fiksi">Non-Fiksi</option>
            <option value="Fiksi">Fiksi</option>
            <option value="Majalah">Majalah</option>
            <option value="Karya Ilmiah">Karya Ilmiah</option>><br>   

</select><br>
tanggal Pinjam :<select name="date">
                    <?php
                    for ($i=1; $i<=31; $i++){
                            echo "<option value='$i'>$i</option>";
                    }
                    ?>
                    </select>
                    <select name="month">
                            <?php
                            $month=array("januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desember");
                            foreach($month as $bulan){
                                echo"<option value='$month'>$bulan </option>";
                            }

                            ?>
                            </select>
                            <select name="year">
                    <?php
                    for ($i=2010; $i<=2025; $i++){
                            echo "<option value='$i'>$i</option>";
                    }
                    ?>
                    </select>
                            
                            <br>
                

Lama Pinjam : <select name="lama_pinjam">
            <?php
             for ($i=1; $i<=10; $i++){
               echo "<option value='$i'>$i</option>";
            }
         ?>
           
</select><br>

Nama Anggota: <input type="text" name="nama_anggota"><br>
Nama Petugas:  <select name="nama_petugas">
            <option value="" selected></option>
            <option value="jicangwook">jicangwook</option>
            <option value="leseunggi">leseunggi</option>
            
            </select><br>

            <input name="btnSubmit" value="simpan" type="submit">
            <input name="btnCancel" value="batal" type="reset">

        </form>
</body>
</html>