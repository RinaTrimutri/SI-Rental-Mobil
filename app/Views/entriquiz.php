<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Penjualan</title>
</head>
<style>
    body {
        font-family: arial;
        font-size: medium;
        font-style: normal;
        background-color: aquamarine;
    }
</style>
<body>
    <form method="post" name="form" action="<?=base_url('Quiz/simpan') ?>">
        <center>
        <table  >
            <tr>
                <td>Kode sepeda</td>
                <td><select name="kode" id="" onchange="a()">
                    <option value="">Pilih</option>
                    <option value="S001">S001</option>
                    <option value="S002">S002</option>
                    <option value="S003">S003</option>
                </select>
            </tr>

            <tr>
                <td>Jenis</td>
                <td><input type="text" name="jenis"></td>
            </tr>

            <tr>
                <td>Harga Semua</td>
                <td><input type="text" name="hsemua" onkeyup="b()"></td>
           </tr>
                
            <tr>
            <td>Jumlah Beli</td>
                <td><input type="text" name="jbeli" onkeyup="b()"></td>
            </tr>

            <tr>
                 <td>Harga Satuan</td>
                <td><input type="text" name="hsatuan" onkeyup="b()"></td>
            </tr>
                
            <tr>
                 <td><input type="submit" name="simpan" value="SIMPAN"></td>
            </tr>
            </table>
            </center>

            <script>
                function a() {
                    var kode = document.form.kode.value;
                    var jenis = document.form.jenis.value;

                    if (kode == 'S001') 
                    {
                        document.form.jenis.value ="Polygon";
                    }  
                    else if (kode == 'S002') 
                    {
                        document.form.jenis.value ="Samia";
                    } 
                    else 
                     {
                        document.form.jenis.value ="Gunung";
                    }
                }

                function b() {
                    var hsemua = document.form.hsemua.value;
                    var jbeli = document.form.jbeli.value;
                  

                    document.form.hsatuan.value = parseInt(hsemua) / parseInt(jbeli) ;
                }
            </script>
            </td>
            </tr>
        
    </form>
</body>
</html>