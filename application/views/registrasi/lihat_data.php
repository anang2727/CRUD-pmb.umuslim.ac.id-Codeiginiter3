<h3>DATA REGISTRASI</h3>
<?php echo anchor ('registrasi/tambah','Tambah Data');?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIK</th>
        <th>Suku</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Nama Lengkap</th>
        <th>Nama Lengkap</th>
        <th>Nama Lengkap</th>
        <th>Nama Lengkap</th>
        <th>Nama Lengkap</th>
        <th>Nama Lengkap</th>
        <th>Nama Lengkap</th>
        <th colspan="2">Operasi</th>
    </tr>
        <?php
        $no=1;
        foreach ($record->result() as $r){
            echo "<tr>
            <td>$no</td>
            <td>$r->namaLengkap</td>
            <td>$r->nik</td>
            <td>$r->suku</td>
            <td>$r->tpt_lahir</td>
            <td>$r->tgl_lahir</td>
            <td>".anchor('registrasi/edit/'.$r->id_registrasi,'Edit')."</td>
            <td>".anchor('registrasi/delete/'.$r->id_registrasi,'Delete')."</td>
            <tr>";
            $no++;
        }?>
</table>
<a href="<?php echo base_url()?>">Beranda</a>
