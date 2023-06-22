<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pendaftaran Mahasiswa Baru</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap-4.0.0/dist/css/bootstrap.min.css" />
  <!-- <link rel="stylesheet" href="/assets2/css/style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4.0.0/assets/css/docs.min.css">

  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>
<?php
echo form_open('registrasi/tambah');
?>

<body>
  <div class="container p-3 my-3">
    <h3 class="text-center ">FORM PENDAFTARAN</h3>
    <h3 class="text-center">MAHASISWA BARU</h3>
    <h3 class="text-center"> 2023/2024</h3>
    <form id="form" method="post" action="<?= base_url('index.php/registrasi/tambah'); ?>">
      <div class="alert alert-info text-white">
        <strong>Data Pribadi Calon Mahasiswa</strong>
      </div>
      <!--  -->
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label>Nama Lengkap:</label>
            <input value="<?php echo set_value('namaLengkap'); ?>" type="text" name="namaLengkap" class="form-control" placeholder="Masukkan Nama Lengkap">
            <small class="text-danger"> <?php echo form_error('namaLengkap'); ?></small>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Nomor Identitas (NIK):</label>
            <input value="<?php echo set_value('nik'); ?>" type="text" name="nik" class="form-control" placeholder="Masukkan Nomor Nik">
            <small class="text-danger"> <?php echo form_error('nik'); ?></small>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Suku Kebangsaan:</label>
            <input value="<?php echo set_value('suku'); ?>" type="text" name="suku" class="form-control" placeholder="Masukkan Suku">
            <small class="text-danger"> <?php echo form_error('suku'); ?></small>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Tempat Lahir:</label>
            <input value="<?php echo set_value('tpt_lahir'); ?>" type="text" name="tpt_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
            <small class="text-danger"> <?php echo form_error('tpt_lahir'); ?></small>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label>Tgl Lahir:</label>
            <input value="<?php echo set_value('tgl_lahir'); ?>" type="date" name="tgl_lahir" class="form-control">
            <small class="text-danger"> <?php echo form_error('tgl_lahir'); ?></small>
          </div>
        </div>
        <div class="col-sm-3">
          <label for="">Jenis Kelamin</label>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" value="Laki-Laki" type="radio" name="jenis_kelamin" id="laki" required />
              <label class="form-check-label" for="laki">Laki-laki</label>
            </div>

            <div class="form-check">
              <input required class="form-check-input" value="Perempuan" type="radio" name="jenis_kelamin" id="perempuan" />
              <label class="form-check-label" for="perempuan">Perempuan
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="aform-group">
            <label>Agama:</label>
            <select class="form-control" name="agama">
              <option value="">Pilih</option>
              <option <?php if (set_value('agama') == 'Islam') {
                        echo 'selected ';
                      } ?> value="Islam">Islam</option>
              <option <?php if (set_value('agama') == 'Kristen') {
                        echo 'selected ';
                      } ?> value="Kristen">Kristen</option>
              <option <?php if (set_value('agama') == 'Katolik') {
                        echo 'selected ';
                      } ?> value="Katolik">Katolik</option>
              <option <?php if (set_value('agama') == 'Hindu') {
                        echo 'selected ';
                      } ?> value="Hindu">Hindu</option>
              <option <?php if (set_value('agama') == 'Budha') {
                        echo 'selected ';
                      } ?> value="Budha">Budha</option>
              <option <?php if (set_value('agama') == 'Konghucu') {
                        echo 'selected ';
                      } ?> value="Konghucu">Konghucu</option>
            </select>
            <small class="text-danger"> <?php echo form_error('agama'); ?></small>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Tinggi Berat Badan</label>
            <input value="<?php echo set_value('tinggi'); ?>" type="text" name="tinggi" class="form-control" placeholder="Tinggi/Berat Badan">
            <small class="text-danger"> <?php echo form_error('tinggi'); ?></small>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row"></div>
      <!--  -->
      <div class="alert alert-info text-white">
        <strong>Alamat Calon Mahasiswa</strong>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Jalan :</label>
            <input value="<?php echo set_value('jalan'); ?>" type="text" name="jalan" class="form-control" placeholder="Masukkan Nama Jalan">
            <small class="text-danger"> <?php echo form_error('jalan'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Dusun :</label>
            <input value="<?php echo set_value('dusun'); ?>" type="text" name="dusun" class="form-control" placeholder="Masukkan Nama Dusun">
            <small class="text-danger"> <?php echo form_error('dusun'); ?></small>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
            <label>RT :</label>
            <input value="<?php echo set_value('rt'); ?>" type="text" name="rt" class="form-control" placeholder="Masukkan RT">
            <small class="text-danger"> <?php echo form_error('rt'); ?></small>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
            <label>RW :</label>
            <input value="<?php echo set_value('rw'); ?>" type="text" name="rw" class="form-control" placeholder="Masukkan RW">
            <small class="text-danger"> <?php echo form_error('rw'); ?></small>
          </div>
        </div>
        <!-- <div class="col-sm-6">
                    <div class="form-group">
                        <label>Dusun :</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Nama Dusun">
                    </div>
                </div> -->
      </div>
      <!--  -->
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Kecamatan:</label>
            <input value="<?php echo set_value('kecamatan'); ?>" type="text" name="kecamatan" class="form-control" placeholder=" Masukkan Kecamatan">
            <small class="text-danger"> <?php echo form_error('kecamatan'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Kelurahan:</label>
            <input value="<?php echo set_value('kelurahan'); ?>" type="text" name="kelurahan" class="form-control" placeholder=" Masukkan Kelurahan">
            <small class="text-danger"> <?php echo form_error('kelurahan'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Kode Pos :</label>
            <input value="<?php echo set_value('kode_pos'); ?>" type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
            <small class="text-danger"> <?php echo form_error('kode_pos'); ?></small>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label>Telepon :</label>
            <input value="<?php echo set_value('telefon'); ?>" type="text" name="telefon" class="form-control" placeholder="Masukkan Nomor Telepon">
            <small class="text-danger"> <?php echo form_error('telefon'); ?></small>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Hp :</label>
            <input value="<?php echo set_value('hp'); ?>" type="text" name="hp" class="form-control" placeholder="Masukkan Nomor Handphone">
            <small class="text-danger"> <?php echo form_error('hp'); ?></small>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Email :</label>
            <input value="<?php echo set_value('email'); ?>" type="text" name="email" class="form-control" placeholder="Masukkan Alamat E-mail">
            <small class="text-danger"> <?php echo form_error('email'); ?></small>
          </div>
        </div>
        <div class="col-sm-3">
          <label for="">Status</label>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="flexRadioDefault100" required />
              <label class="form-check-label" for="flexRadioDefault100">Kawin</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="flexRadioDefault122" required />
              <label class="form-check-label" for="flexRadioDefault122">Belum Kawin
              </label>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row"></div>
      <!--  -->
      <div class="alert alert-info text-white">
        <strong>Data Pendidikan</strong>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Pendidikan Terakhir:</label>
            <select class="form-control" name="pendidikan_terakhir">
              <option value="">Pilih</option>
              <option <?php if (set_value('pendidikan_terakhir') == 'SMA') {
                        echo 'selected ';
                      } ?> value="SMA">SMA</option>
              <option <?php if (set_value('pendidikan_terakhir') == 'MA') {
                        echo 'selected ';
                      } ?> value="MA">MA</option>
              <option <?php if (set_value('pendidikan_terakhir') == 'SMK') {
                        echo 'selected ';
                      } ?> value="SMK">SMK</option>
              <option <?php if (set_value('pendidikan_terakhir') == 'D1') {
                        echo 'selected ';
                      } ?> value="D1">D1</option>
              <option <?php if (set_value('pendidikan_terakhir') == 'D2') {
                        echo 'selected ';
                      } ?> value="D2">D2</option>
              <option <?php if (set_value('pendidikan_terakhir') == 'D3') {
                        echo 'selected ';
                      } ?> value="D3">D3</option>
              <option <?php if (set_value('pendidikan_terakhir') == 'D4') {
                        echo 'selected ';
                      } ?> value="D4">D4</option>
              <option <?php if (set_value('pendidikan_terakhir') == 'S1') {
                        echo 'selected ';
                      } ?> value="S1">S1</option>
            </select>
            <small class="text-danger"> <?php echo form_error('pendidikan_terakhir'); ?></small>
          </div>
        </div>
        <!--  -->
        <div class="col-sm-6">
          <div class="form-group">
            <label>NISN:</label>
            <input value="<?php echo set_value('nisn'); ?>" type="text" name="nisn" class="form-control" placeholder="Nisn">
            <small class="text-danger"> <?php echo form_error('nisn'); ?></small>
          </div>
        </div>
        <!--  -->
        <div class="col-sm-6">
          <div class="form-group">
            <label>Nama Sekolah :</label>
            <input value="<?php echo set_value('nama_sekolah'); ?>" type="text" name="nama_sekolah" class="form-control" placeholder="Masukkan Nama Sekolah">
            <small class="text-danger"> <?php echo form_error('nama_sekolah'); ?></small>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Jurusan :</label><input value="<?php echo set_value('jurusan'); ?>" type="text" name="jurusan" class="form-control" placeholder=" Masukkan Jurusan">
            <small class="text-danger"> <?php echo form_error('jurusan'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>No. Ijazah :</label>
            <input value="<?php echo set_value('no_ijazah'); ?>" type="text" name="no_ijazah" class="form-control" placeholder="No Ijazah">
            <small class="text-danger"> <?php echo form_error('no_ijazah'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Tempat Dikeluarkan Ijazah:</label>
            <input value="<?php echo set_value('tempat_ijazah'); ?>" type="text" name="tempat_ijazah" class="form-control" placeholder="Tempat dikeluarkan Ijazah">
            <small class="text-danger"> <?php echo form_error('tempat_ijazah'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Tgl dan Tahun Ijazah :</label>
            <input value="<?php echo set_value('tgl_ijazah'); ?>" type="date" name="tgl_ijazah" class="form-control" placeholder="Tanggal dan Tahun Ijazah">
            <small class="text-danger"> <?php echo form_error('tgl_ijazah'); ?></small>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="alert alert-info text-white">
        <strong>Identitas Orang Tua / Wali</strong>
      </div>
      <!--  -->
      <div class="row">
        <!-- ayah  -->
        <div class="col-sm-4">
          <div class="form-group">
            <label><strong> Nama Ayah :</strong></label>
            <input value="<?php echo set_value('nama_ayah'); ?>" type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Lengkap Ayah ">
            <small class="text-danger"> <?php echo form_error('nama_ayah'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Nik (No.Ktp) :</label>
            <input value="<?php echo set_value('nik_ayah'); ?>" type="text" name="nik_ayah" class="form-control" placeholder="Masukkan Nomor NIK Ayah">
            <small class="text-danger"> <?php echo form_error('nik_ayah'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <label for="">Hubungan Dengan Ayah</label>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" value="Ayah Kandung" type="radio" name="hubungan_ayah" id="ayahkandung98" />
              <label class="form-check-label" for="ayahkandung98">Ayah Kandung
              </label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="ayahtiri" name="hubungan_ayah" value="Ayah Tiri" checked />
              <label class="form-check-label" for="ayahtiri">Ayah Tiri</label>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Tempat Lahir :</label>
            <input value="<?php echo set_value('tpt_lahir_ayah'); ?>" type="text" name="tpt_lahir_ayah" class="form-control" placeholder="Masukkan Tempat Lahir Ayah">
            <small class="text-danger"> <?php echo form_error('tpt_lahir_ayah'); ?></small>
          </div>
        </div>
        <!--  -->
        <div class="col-sm-4">
          <div class="form-group">
            <label>Tgl Lahir :</label>
            <input value="<?php echo set_value('tgl_lahir_ayah'); ?>" type="date" type="date" name="tgl_lahir_ayah" class="form-control">
            <small class="text-danger"> <?php echo form_error('tgl_lahir_ayah'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <label> <strong>Status Ayah</strong></label>
          <div class="fform-group">
            <div class="form-check">
              <input class="form-check-input" value="Masih Hidup" type="radio" name="status_ayah" id="hidup" />
              <label class="form-check-label" for="hidup">Masih Hidup </label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="almarhum" name="status_ayah" value="Almarhum" checked />
              <label class="form-check-label" for="almarhum">Almarhum</label>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Pekerjaan Ayah :</label>
            <select class="form-control" name="pekerjaan_ayah">
              <option value="">Pilih</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Tidak Bekerja') {
                        echo 'selected ';
                      } ?> value="Tidak Bekerja">Tidak Bekerja</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Nelayan') {
                        echo 'selected ';
                      } ?> value="Nelayan">Nelayan</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Petani') {
                        echo 'selected ';
                      } ?> value="Petani">Petani</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Peternak') {
                        echo 'selected ';
                      } ?> value="Peternak">Peternak</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'PNS/TNI/POLRI') {
                        echo 'selected ';
                      } ?> value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Karyawan Swasta') {
                        echo 'selected ';
                      } ?> value="Karyawan Swasta">Karyawan Swasta</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Wiraswasta') {
                        echo 'selected ';
                      } ?> value="Wiraswasta">Wiraswasta</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Wirausaha') {
                        echo 'selected ';
                      } ?> value="Wirausaha">Wirausaha</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Buruh') {
                        echo 'selected ';
                      } ?> value="Buruh">Buruh</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Pensiunan') {
                        echo 'selected ';
                      } ?> value="Pensiunan">Pensiunan</option>
              <option <?php if (set_value('pekerjaan_ayah') == 'Lainnya') {
                        echo 'selected ';
                      } ?> value="Lainnya">Lainnya</option>
            </select>
            <small class="text-danger"> <?php echo form_error('pekerjaan_ayah'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>No Hp :</label>
            <input value="<?php echo set_value('no_hp_ayah'); ?>" type="text" name="no_hp_ayah" class="form-control" placeholder="Masukkan Nomor Hp Ayah ">
            <small class="text-danger"> <?php echo form_error('no_hp_ayah'); ?></small>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label>Telepon :</label>
            <input value="<?php echo set_value('telefon_ayah'); ?>" type="text" name="telefon_ayah" class="form-control" placeholder="Masukkan Nomor Telefon Ayah ">
            <small class="text-danger"> <?php echo form_error('telefon_ayah'); ?></small>
          </div>
        </div>
      </div>
      <div class="row offset-2">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Alamat Rumah :</label>
            <textarea value="<?php echo set_value('alamat_rumah_ayah'); ?>" class="form-control" name="alamat_rumah_ayah" rows="2" id="Alamat Rumah Ayah"></textarea>
            <small class="text-danger"> <?php echo form_error('alamat_rumah_ayah'); ?></small>
            </textarea>
            <!-- <input type="text" class="form-control"> -->
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Alamat Kantor :</label>
            <textarea value="<?php echo set_value('alamat_kantor_ayah'); ?>" class="form-control" name="alamat_kantor_ayah" rows="2" id="Alamat Kantor Ayah"></textarea>
            <small class="text-danger"> <?php echo form_error('alamat_kantor_ayah'); ?></small>
            </textarea>
            <!-- <input type="text" class="form-control"> -->
          </div>
        </div>
      </div>
      <!--  -->
      <hr />
      <div class="row">
        <!-- ayah  -->
        <div class="col-sm-4">
          <div class="form-group">
            <label><strong> Nama Ibu :</strong></label>
            <input value="<?php echo set_value('nama_ibu'); ?>" type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Lengkap Ibu">
            <small class="text-danger"> <?php echo form_error('nama_ibu'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Nik (No.Ktp) :</label>
            <input value="<?php echo set_value('nik_ibu'); ?>" type="text" name="nik_ibu" class="form-control" placeholder="Masukkan NIK Ibu">
            <small class="text-danger"> <?php echo form_error('nik_ibu'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <label for="">Hubungan Dengan Ibu</label>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" value="IBU KANDUNG" type="radio" name="hubungan_ibu" id="ibukandung98" />
              <label class="form-check-label" for="ibukandung98">Ibu Kandung
              </label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="ibutiri" name="hubungan_ibu" value="IBU TIRI" checked />
              <label class="form-check-label" for="ibutiri">Ibu Tiri</label>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Tempat Lahir :</label>
            <input value="<?php echo set_value('tempat_lahir_ibu'); ?>" type="text" name="tempat_lahir_ibu" class="form-control" placeholder="Masukkan Tempat Lahir Ibu">
            <small class="text-danger"> <?php echo form_error('tempat_lahir_ibu'); ?></small>
          </div>
        </div>
        <!--  -->
        <div class="col-sm-4">
          <div class="form-group">
            <label>Tgl Lahir :</label>
            <input value="<?php echo set_value('tgl_lahir_ibu'); ?>" type="date" name="tgl_lahir_ibu" class="form-control">
            <small class="text-danger"> <?php echo form_error('tgl_lahir_ibu'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <label> <strong>Status Ibu</strong></label>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status_ibu" id="hidup2" />
              <label class="form-check-label" for="hidup2">Masih Hidup </label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="almarhum" name="status_ibu" value="option1" checked />
              <label class="form-check-label" for="almarhum">Almarhum</label>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Pekerjaan Ibu:</label>
            <select class="form-control" name="pekerjaan_ibu">
              <option value="">Pilih</option>
              <option <?php if (set_value('pekerjaan_ibu') == 'Ibu Rumah Tangga') {
                        echo 'selected ';
                      } ?> value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
              <option <?php if (set_value('pekerjaan_ibu') == 'Petani') {
                        echo 'selected ';
                      } ?> value="Petani">Petani</option>
              <option <?php if (set_value('pekerjaan_ibu') == 'Karyawan Swasta') {
                        echo 'selected ';
                      } ?> value="Karyawan Swasta">Karyawan Swasta</option>
              <option <?php if (set_value('pekerjaan_ibu') == 'Wirausaha') {
                        echo 'selected ';
                      } ?> value="Wirausaha">Wirausaha</option>
              <option <?php if (set_value('pekerjaan_ibu') == 'Pensiunan') {
                        echo 'selected ';
                      } ?> value="Pensiunan">Pensiunan</option>
              <option <?php if (set_value('pekerjaan_ibu') == 'Lainnya') {
                        echo 'selected ';
                      } ?> value="Lainnya">Lainnya</option>
            </select>
            <small class="text-danger"> <?php echo form_error('pekerjaan_ibu'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>No Hp :</label>
            <input value="<?php echo set_value('no_hp_ibu'); ?>" type="text" name="no_hp_ibu" class="form-control" placeholder="Masukkan Nomor Hp Ibu">
            <small class="text-danger"> <?php echo form_error('no_hp_ibu'); ?></small>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label>Telepon :</label>
            <input value="<?php echo set_value('telefon_ibu'); ?>" type="text" name="telefon_ibu" class="form-control" placeholder="Masukkan Nomor Telefon Ibu">
            <small class="text-danger"> <?php echo form_error('telefon_ibu'); ?></small>
          </div>
        </div>
      </div>
      <div class="row offset-2  ">



        <div class="col-sm-4">
          <div class="form-group">
            <label>Alamat Rumah :</label>
            <textarea value="<?php echo set_value('alamat_rumah_ibu'); ?>" class="form-control" name="alamat_rumah_ibu" rows="2" id="alamat"></textarea>
            <small class="text-danger"> <?php echo form_error('alamat_rumah_ibu'); ?></small>
            </textarea>
            <!-- <input type="text" class="form-control"> -->
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Alamat Kantor :</label>
            <textarea value="<?php echo set_value('alamat_kantor_ibu'); ?>" class="form-control" name="alamat_kantor_ibu" rows="2" id="alamat"></textarea>
            <small class="text-danger"> <?php echo form_error('alamat_kantor_ibu'); ?></small>
            </textarea>
            <!-- <input type="text" class="form-control"> -->
          </div>
        </div>
      </div>
      <!--  -->
      <!-- <tr>
        <td>Nama Prodi</td>
        <td><div class="col-sm-4">
            <select name="id_prodi" class="form-control">
                <?php
                // foreach ($rec_prodi->result() as $rp) {
                //  echo "<option value='$rp->id_prodi'>$rp->nama_prodi</option>";
                //  } 
                ?>
            </select></div>
        </td>
    </tr> -->
      <!--  -->
      <div class="form-group">
        <strong>Pilihan Program Studi</strong>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Pilih Program Studi 1:</label>
            <select class="form-control" name="prodi_1">
              <option>Pilih</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Agroteknologi (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Agroteknologi (FE) - Akreditas B">S1 - Agroteknologi (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Peternakan (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Peternakan (FE) - Akreditas B">S1 - Peternakan (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Agribisnis (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Agribisnis (FE) - Akreditas B">S1 - Agribisnis (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Akuakultur/BDPI (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Akuakultur/BDPI (FE) - Akreditas B">S1 - Akuakultur/BDPI (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Kehutanan (FE) - Akreditas C') {
                        echo 'selected ';
                      } ?> value="S1 - Kehutanan (FE) - Akreditas C">S1 - Kehutanan (FE) - Akreditas C</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Teknologi Industri Pertanian (FE) - Akreditas C') {
                        echo 'selected ';
                      } ?>value="S1 - Teknologi Industri Pertanian (FE) - Akreditas C">S1 - Teknologi Industri Pertanian (FE) - Akreditas C</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Pendidikan Matematika (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?>value="S1 - Pendidikan Matematika (FKIP) - Akreditas B">S1 - Pendidikan Matematika (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Pendidikan Bologi (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Bologi (FKIP) - Akreditas B">S1 - Pendidikan Bologi (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Pendidikan Fisika (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Fisika (FKIP) - Akreditas B">S1 - Pendidikan Fisika (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Pendidikan Bhs Inggris (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Bhs Inggris (FKIP) - Akreditas B">S1 - Pendidikan Bhs Inggris (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Pendidikan Bhs Indonesia (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Bhs Indonesia (FKIP) - Akreditas B">S1 - Pendidikan Bhs Indonesia (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Pendidikan Ekonomi (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Ekonomi (FKIP) - Akreditas B">S1 - Pendidikan Ekonomi (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Pendidikan Geografi (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Geografi (FKIP) - Akreditas B">S1 - Pendidikan Geografi (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - PGSD (FKIP) - Akreditas A') {
                        echo 'selected ';
                      } ?> value="S1 - PGSD (FKIP) - Akreditas A">S1 - PGSD (FKIP) - Akreditas A</option>
              <option <?php if (set_value('prodi_1') == 'S1 - PG PAUD (FKIP) - Akreditas C') {
                        echo 'selected ';
                      } ?> value="S1 - PG PAUD (FKIP) - Akreditas C">S1 - PG PAUD (FKIP) - Akreditas C</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Teknik Sipil (FT) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Teknik Sipil (FT) - Akreditas B">S1 - Teknik Sipil (FT) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Arsitektur (FT) - Akreditas C') {
                        echo 'selected ';
                      } ?> value="S1 - Arsitektur (FT) - Akreditas C">S1 - Arsitektur (FT) - Akreditas C</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Administrasi Bisnis (FISIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Administrasi Bisnis (FISIP) - Akreditas B">S1 - Administrasi Bisnis (FISIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Administrasi Publik (FISIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Administrasi Publik (FISIP) - Akreditas B">SI - Administrasi Publik (FISIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Hubungan Internasional (FISIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Hubungan Internasional (FISIP) - Akreditas B">SI - Hubungan Internasional (FISIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Ekonomi Pembangunan (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Ekonomi Pembangunan (FE) - Akreditas B">SI - Ekonomi Pembangunan (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Informatika (FIKOM) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Informatika (FIKOM) - Akreditas B">SI - Informatika (FIKOM) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'DIII - Sistem Informasi (FIKOM) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="DIII - Sistem Informasi (FIKOM) - Akreditas B">DIII - Sistem Informasi (FIKOM) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'SI - Kebidanan Program Sarjana (FK) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="SI - Kebidanan Program Sarjana (FK) - Akreditas B">SI - Kebidanan Program Sarjana (FK) - Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'S1 - Pendidikan Profesi Bidan (FK) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Profesi Bidan (FK) - Akreditas B">SI - Pendidikan Profesi Bidan (FK)- Akreditas B</option>
              <option <?php if (set_value('prodi_1') == 'DIII - Kebidanan Program Diploma (FK) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="DIII - Kebidanan Program Diploma (FK) - Akreditas B">DIII - Kebidanan Program Diploma (FK) - Akreditas B</option>
            </select>
            <small class="text-danger"> <?php echo form_error('id_prodi_1'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Pilih Program Studi 2:</label>
            <select class="form-control" name="prodi_2">
              <option value="">Pilih</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Agroteknologi (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Agroteknologi (FE) - Akreditas B">S1 - Agroteknologi (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Peternakan (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Peternakan (FE) - Akreditas B">S1 - Peternakan (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Agribisnis (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Agribisnis (FE) - Akreditas B">S1 - Agribisnis (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Akuakultur/BDPI (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Akuakultur/BDPI (FE) - Akreditas B">S1 - Akuakultur/BDPI (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Kehutanan (FE) - Akreditas C') {
                        echo 'selected ';
                      } ?> value="S1 - Kehutanan (FE) - Akreditas C">S1 - Kehutanan (FE) - Akreditas C</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Teknologi Industri Pertanian (FE) - Akreditas C') {
                        echo 'selected ';
                      } ?> value="S1 - Teknologi Industri Pertanian (FE) - Akreditas C">S1 - Teknologi Industri Pertanian (FE) - Akreditas C</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Pendidikan Matematika (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Matematika (FKIP) - Akreditas B">S1 - Pendidikan Matematika (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Pendidikan Bologi (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Bologi (FKIP) - Akreditas B">S1 - Pendidikan Bologi (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Pendidikan Fisika (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Fisika (FKIP) - Akreditas B">S1 - Pendidikan Fisika (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Pendidikan Bhs Inggris (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Bhs Inggris (FKIP) - Akreditas B">S1 - Pendidikan Bhs Inggris (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Pendidikan Bhs Indonesia (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Bhs Indonesia (FKIP) - Akreditas B">S1 - Pendidikan Bhs Indonesia (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Pendidikan Ekonomi (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Ekonomi (FKIP) - Akreditas B">S1 - Pendidikan Ekonomi (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Pendidikan Geografi (FKIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Pendidikan Geografi (FKIP) - Akreditas B">S1 - Pendidikan Geografi (FKIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - PGSD (FKIP) - Akreditas A') {
                        echo 'selected ';
                      } ?> value="S1 - PGSD (FKIP) - Akreditas A">S1 - PGSD (FKIP) - Akreditas A</option>
              <option <?php if (set_value('prodi_2') == 'S1 - PG PAUD (FKIP) - Akreditas C') {
                        echo 'selected ';
                      } ?> value="S1 - PG PAUD (FKIP) - Akreditas C">S1 - PG PAUD (FKIP) - Akreditas C</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Teknik Sipil (FT) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Teknik Sipil (FT) - Akreditas B">S1 - Teknik Sipil (FT) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Arsitektur (FT) - Akreditas C') {
                        echo 'selected ';
                      } ?> value="S1 - Arsitektur (FT) - Akreditas C">S1 - Arsitektur (FT) - Akreditas C</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Administrasi Bisnis (FISIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Administrasi Bisnis (FISIP) - Akreditas B">S1 - Administrasi Bisnis (FISIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Administrasi Publik (FISIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Administrasi Publik (FISIP) - Akreditas B">SI - Administrasi Publik (FISIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Hubungan Internasional (FISIP) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Hubungan Internasional (FISIP) - Akreditas B">SI - Hubungan Internasional (FISIP) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Ekonomi Pembangunan (FE) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Ekonomi Pembangunan (FE) - Akreditas B">SI - Ekonomi Pembangunan (FE) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Informatika (FIKOM) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="S1 - Informatika (FIKOM) - Akreditas B">SI - Informatika (FIKOM) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'DIII - Sistem Informasi (FIKOM) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="DIII - Sistem Informasi (FIKOM) - Akreditas B">DIII - Sistem Informasi (FIKOM) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'SI - Kebidanan Program Sarjana (FK) - Akreditas B') {
                        echo 'selected ';
                      } ?> value="SI - Kebidanan Program Sarjana (FK) - Akreditas B">SI - Kebidanan Program Sarjana (FK) - Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'S1 - Pendidikan Profesi Bidan (FK) - Akreditas B') {
                        echo 'selected ';
                      } ?>value="S1 - Pendidikan Profesi Bidan (FK) - Akreditas B">SI - Pendidikan Profesi Bidan (FK)- Akreditas B</option>
              <option <?php if (set_value('prodi_2') == 'DIII - Kebidanan Program Diploma (FK) - Akreditas B') {
                        echo 'selected ';
                      } ?>value="DIII - Kebidanan Program Diploma (FK) - Akreditas B">DIII - Kebidanan Program Diploma (FK) - Akreditas B</option>
            </select>
            <small class="text-danger"> <?php echo form_error('id_prodi_2'); ?></small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="">Kelas :</label>
            <select class="form-control" name="kelas">
              <option value="">Pilih</option>
              <option <?php if (set_value('kelas') == 'Reguler') {
                        echo 'selected ';
                      } ?> value="Reguler">Reguler</option>
              <option <?php if (set_value('kelas') == 'Lanjutan') {
                        echo 'selected ';
                      } ?> value="Lanjutan">Lanjutan</option>
              <option <?php if (set_value('kelas') == 'Pindahan') {
                        echo 'selected ';
                      } ?> value="Pindahan">Pindahan</option>
              <option <?php if (set_value('kelas') == 'Non Reguler') {
                        echo 'selected ';
                      } ?> value="Non Reguler">Non Reguler</option>
            </select>
            <small class="text-danger"> <?php echo form_error('kelas'); ?></small>
          </div>
        </div>
      </div>
      <div class="alert alert-info text-white">
        <strong>Bahan Yang Harus Dilampirkan</strong>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label class="form-label" for="customFile">Ijazah</label>
          <input name="ijazah" type="file" class="form-control" id="customFile" />
          <small class="text-danger"> <?php echo form_error('ijazah'); ?></small>
        </div>
        <div class="col-sm-6">
          <label class="form-label" for="customFile">Pas Foto</label>
          <input class="form-control" name="foto" type="file" id="formFile">
          <small class="text-danger"> <?php echo form_error('foto'); ?></small>
        </div>
        <br>
        <br>
        <br>
        <div class="col-sm-4">
          <label class="form-label" for="customFile">Trankrip Nilai</label>
          <input type="file" name="transkrip_nilai" class="form-control" id="customFile" />
          <small class="text-danger"> <?php echo form_error('transkrip_nilai'); ?></small>
        </div>
        <div class="col-sm-4">
          <label class="form-label" for="customFile">Kartu Keluarga</label>
          <input type="file" class="form-control" name="kk" id="customFile" />
          <small class="text-danger"> <?php echo form_error('kk'); ?></small>
        </div>
        <div class="col-sm-4">
          <label class="form-label" for="customFile">Kartu KIP</label>
          <input type="file" name="k_kip" class="form-control" id="customFile" />
          <small class="text-danger"> <?php echo form_error('k_kip'); ?></small>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="alert alert-info text-white">
        <strong>Informasi Akun</strong>
      </div>
      <div>
        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;" class="row border  rounded my-5 mx-auto w-50">
          <h3 class="my-3 text-center text-bold">Register Account</h3>
          <div class="col-sm-6 mt-4 offset-3">
            <label class="form-label" for="customFile">Username</label>
            <input value="<?php echo set_value('username') ?>" type="text" class="form-control" name="username" id="customFile" />
            <small class="text-danger"> <?= form_error('username') ?></small>
            <div class="invalid-feedback">Please choose a username</div>
          </div>
          <div class="col-sm-6 offset-3">
            <label class="form-label" for="customFile">Password</label>
            <input value="<?php echo set_value('password') ?>" type="text" class="form-control" name="password" id="customFile" />
            <small class="text-danger"> <?= form_error('password') ?></small>
            <div class="invalid-feedback">Please choose a password</div>
          </div>
          <div class="col-sm-6 offset-3 mb-3">
            <label class="form-label" for="customFile">Level</label>
            <input value="<?php echo set_value('level') ?>" type="text" class="form-control" name="level" id="customFile" />
            <small class="text-danger"> <?= form_error('level') ?></small>
            <div class="invalid-feedback">Please choose a level</div>
            <!-- <select class="form-control" name="level">
              <option>Pilih</option>
              <option value="sadmin">SAdmin</option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
              <option value="client">Client</option>
            </select> -->
            <br>
          </div>
        </div>


        <!-- <div> -->
        <div class="alert alert-info text-white">

          <strong>Bahan Yang Harus Dilampirkan</strong>
        </div>
        <div>a. Fotocopy Ijazah(surat keterangan lulus Dari dari kepala sekolah)dan daftar nilai/SKHU yang telah di legalisir sebanyak 3(tiga)lembar </div>
        <div>b. pasfoto terbaru ukuran 3X4 cm sebanyak 2 (dua)lembar</div>
        <div>c. transkrip nilai yang telah di lagilisir (bagi kelas lanjutan dan DII,DIII/pindahan) sebanyak 3(tiga)lembar</div>
        <div>d. fotocopy kartu keluarga calon mahasiswa sebanyak 1(satu)lembar</div>
        <div>e. fotocopy KTP calon mahasiswa,ayah dan ibu (sesuai isian pada formulir) masing masing sebanyak 1 (satu) lembar</div>
        <div>f. fotocopy kartu KIP (bagi jalur beasiswa KIP)</div>

        <br>

        <!-- <div class="alert alert-primary"> -->
        <div class="alert alert-info text-white">

          <strong>Keterangan</strong>
        </div>
        <div>1. isilah formulir dengan lengkap dengan jelas</div>
        <div>2. isilah kontak yang telah disediakan sesuai dengan nomor pilihan menggunakan tanda v (centang)</div>
        <div>3. untuk poin 7,maksimal program studi 2 (dua)pilihan</div>
        <div>4. jika ada hal yang kurang jelas dapat di nyatakan lanbgsung pada panitia SPMB/contac person : 0895400652121</div>
        <div>5. PGSD :pendidikan guru sekolah dasar</div>
        <div>6. PG PAUD :pendidikan guru pendidikan anak usia dini</div>


        <br>
        <div class="row">
          <div class="col-sm-4">
            <button type="submit" name="submit" id="submit" class="alert alert-info text-white">
              Daftar
              <!-- <a class="text-light text-decoration-none" type="submit"> Daftar </a> -->
            </button>
            <button type="reset" class="alert alert-info text-white"> Reset</button>
          </div>
        </div>
    </form>
  </div>
</body>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script> -->
<script src="bootstrap-4.0.0/assets/js/docs.min.js"></script>
<style>
  body {
    background: #c3e1e1;
    /* background-image: linear-gradient(#00b09b, #96c93d); */
  }

  .container {
    background-color: #fff;
  }

  .text-center {
    /* color: #0e7385; */
    color: #008080;
  }

  .alert-info {
    /* background: linear-gradient(to right, #71dad3, #93c3f1); */
    /* background-image: linear-gradient(to right, #00b09b, #96c93d); */
    background-color: #01b075;

    color: #fff;
    border: none;
  }

  label {
    /* color: #008080; */
    /* color: #01b075; */
    font-family: poppins;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    color: #01b075;
  }
</style>

</html>