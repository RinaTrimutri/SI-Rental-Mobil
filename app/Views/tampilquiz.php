<style>
    body {
        font-family: arial;
        font-size: medium;
        font-style: normal;
        background-color: lavender;
    }
</style>
<center>
    <h2>Tampil Data Baju</h2>
    <hr>
    <table border="1">
        <tr>
            <td>Kode sepeda</td>
            <td>Jenis</td>
            <td>Harga sewa </td>
            <td>Jumlah beli </td>
            <td>Harga Satuan</td>
        </tr>
        <?php
        foreach ($sppdok as $data) :
            ?>
            <tr>
                <td><?=$data['kode']?></td>
                <td><?=$data['jenis']?></td>
                <td><?=$data['hsewa']?></td>
                <td><?=$data['jbeli']?></td>
                <td><?=$data['hsatuan']?></td>
            </tr>
            <?php
            endforeach;
            ?>
    </table>
    <form method="post" name="form" action="<?=base_url('Quiz/entri') ?>">
    <td><input type="submit" name="tambah" value="TAMBAH"></td>
    
</center>