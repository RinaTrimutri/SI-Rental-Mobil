<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
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
    <center>
        <br>
        <form method="post" name="form" action="bayar">
            <table border="1">
                <h3>Form Pembayaran</h3>
                <tr>
                    <td>Bakso</td>
                    <td><input type="text" name="bakso"></td>
                </tr>
                <tr>
                    <td>Somay</td>
                    <td><input type="text" name="somay" onkeyup="proses()"></td>
                </tr>
                <tr>
                    <td>Mie Ayam</td>
                    <td><input type="text" name="mieayam" onkeyup="proses()"></td>
                </tr>
                <tr>
                    <td>Es Teh</td>
                    <td><input type="text" name="est" onkeyup="proses()"></td>
                </tr>
                <tr>
                    <td>Member</td>
                    <td><select name="member" id="member" onchange="diskon()">
                            <option value="">Pilih</option>
                            <option value="ya">YA</option>
                            <option value="tdk">TIDAK</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" name="total" onkeyup="proses()"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<script>
    function diskon() {
        var member = document.form.member.value;
        var total = document.form.total.value;
        if (member == "ya") {
            document.form.total.value = total - (0.2 * total);
        } else {
            document.form.total.value = total;
        } 
    }

    function proses() {
        var bakso = document.form.bakso.value;
        var somay = document.form.somay.value;
        var mieayam = document.form.mieayam.value;
        var est = document.form.est.value;
        var total = (parseInt(bakso) * 10000) + (parseInt(somay) * 12000) + (parseInt(mieayam) * 12000) + (parseInt(est) * 4000 );
        document.form.total.value = total;
    }
</script>