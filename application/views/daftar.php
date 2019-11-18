<div class="pt-5"></div>

<main role="main">

  <div class="container mt-5">
    <form action="<?=site_url('daftar');?>" method="post">
      <div class="row">

      <!-- #1 Data Pribadi -->
        <div class="col-md-6">
          <div class="card bg-light mb-3">
            <div class="card-header">DATA PRIBADI #1</div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="nama_siswa">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_siswa" value="<?=set_value('nama_siswa');?>">
                <small class="form-text text-muted">Nama peserta didik sesuai dokumen resmi yang berlaku (Akta atau ijazah sebelumnya).</small>
                <small class="form-text text-muted">Hanya bisa diubah melalui <a href="http://vervalpd.data.kemdikbud.go.id" target="_blank">http://vervalpd.data.kemdikbud.go.id</a></small>
                <?=form_error('nama_siswa', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <?=form_dropdown('jenis_kelamin', $jenis_kelamin, set_value('jenis_kelamin'), 'class="form-control"');?>
              </div>
              <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" class="form-control" name="nisn" value="<?=set_value('nisn');?>">
                <small class="form-text text-muted">Nomor Induk Nasional peserta didik (jika memiliki). Jika belum memiliki, maka wajib dikosongkan. NISN memiliki format 10 digit angka. contoh: 0009321234.</small>
                <small class="form-text text-muted">Untuk memeriksa NISN, dapat mengunjungi laman <a href="http://nisn.data.kemdikbud.go.id" target="_blank">http://nisn.data.kemdikbud.go.id</a></small>
                <?=form_error('nisn', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="nik">NIK / No. Kitas (Untuk WNA)</label>
                <input type="number" class="form-control" name="nik" value="<?=set_value('nik');?>">
                <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada kartu keluarga, Kartu Identitas Anak, atau KTP (jika sudah memiliki) bagi WNI. NIK memiliki format 16 digit angka. Contoh: 6112090906021104.</small>
                <small class="form-text text-muted">Pastikan NIK tidak tertukar dengan No. Kartu Keluarga, karena keduannya memiliki format yang sama. Bagi WNA, diisi dengan nomor Kartu Izin Tinggal Terbatas (KITAS).</small>
                <?=form_error('nik', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?=set_value('tempat_lahir');?>">
                <?=form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?=set_value('tanggal_lahir');?>">
                <?=form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="agama_siswa">Agama & Kepercayaan</label>
                <?=form_dropdown('agama_siswa', $agama_siswa, set_value('agama_siswa'), 'class="form-control"');?>
                <small class="form-text text-muted">Agama atau kepercayaan yang dianut oleh peserta didik. Apabila peserta didik adalah penghayat kepercayaan (misalnya pada daerah tertentu yang masih memiliki penganut kepercayaan), dapat memilih opsi Kepercayaan Kepada Tuhan YME.</small>
                <?=form_error('agama_siswa', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="is_wna">Apakah WNA?</label>
                <?=form_checkbox('is_wna', 1, FALSE);?>
                <small class="form-text text-muted">Kewarganegaraan peserta didik.</small>
              </div>
              <div class="form-group">
                <label for="nama_negara">Nama Negara</label>
                <input type="text" class="form-control" name="nama_negara" value="<?=set_value('nama_negara');?>">
                <small class="form-text text-muted">Kosongkan bila bukan WNA</small>
              </div>
              <div class="form-group">
                <label for="kebutuhan_khusus">Jenis Kelamin</label>
                <?=form_dropdown('kebutuhan_khusus', $kebutuhan_khusus, set_value('kebutuhan_khusus'), 'class="form-control"');?>
              </div>

            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit Pendaftaran</button>
        </div>

        <!-- #2 Data Orang Tua -->
        <div class="col-md-6">
          <div class="card bg-light mb-3">
            <div class="card-header">DATA ORANG TUA #2</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

      </div>
    </form>  
  </div>

</main>