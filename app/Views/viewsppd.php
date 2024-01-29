<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Rina</title>
</head>
<body>
    <form method="post" name="form" action="<?=base_url('Home/simpan') ?>">
        <center>
        <table >
            <tr>
                <td>Kode Keberangkatan</td>
                <td><select name="kode" id="" onchange="a()">
                    <option value="">Pilih</option>
                    <option value="K001">K001</option>
                    <option value="K002">K002</option>
                    <option value="K003">K003</option>
                    <option value="K004">K004</option>
                </select>
            </tr>

            <tr>
                <td>Agenda</td>
                <td><input type="text" name="agenda"></td>
            </tr>

            <tr>
                <td>Biaya Transportasi</td>
                <td><input type="text" name="transportasi" onkeyup="b()"></td>
           </tr>
                
            <tr>
            <td>Biaya Penginapan</td>
                <td><input type="text" name="penginapan" onkeyup="b()"></td>
            </tr>

            <tr>
                <td>Biaya Pokok</td>
                <td><input type="text" name="pokok" onkeyup="b()"></td>
            </tr>

            <tr>
                 <td>Total</td>
                <td><input type="text" name="total" onkeyup="b()"></td>
            </tr>
                
            <tr>
                 <td><input type="submit" name="simpan" value="SIMPAN"></td>
            </tr>
            </table>
            </center>

            <script>
                function a() {
                    var kode = document.form.kode.value;
                    var agenda = document.form.agenda.value;

                    if (kode == 'K001') 
                    {
                        document.form.agenda.value ="Rapat"
                    }  
                    else if (kode == 'K002') 
                    {
                        document.form.agenda.value ="Dinas Luar"
                    } 
                    else if (kode == 'K003') 
                    {
                        document.form.agenda.value ="Liburan"
                    } 
                    else 
                     {
                        document.form.agenda.value ="Study"
                    }
                }

                function b() {
                    var transportasi = document.form.transportasi.value;
                    var penginapan = document.form.penginapan.value;
                    var pokok = document.form.pokok.value;

                    document.form.total.value = parseInt(transportasi) + parseInt(penginapan) + parseInt(pokok);
                }
            </script>
            </td>
            </tr>
        
    </form>
</body>
</html>