<?php echo form_open('play/cek_jawaban'); ?>
<div class="d-flex flex-column bd-highlight mb-3 align-content-around py-5">
  <div class="p-2 bd-highlight align-self-center"></div>
  <div class="p-2 bd-highlight">
    <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card border-dark shadow-2-strong" style="border-radius: 0.5rem;">
            <div class="card-header">
              <div class="d-flex flex-row justify-content-lg-between">
                <div class="p-2">Pilih jawaban yang benar</div>
              </div>
            </div>
            
            <div class="card-body bg-primary text-white">
              <?php if ($soal_pelajaran): ?>
                <p class=""><?php echo $soal_pelajaran['TEKS_SOAL_PELAJARAN']; ?></p>  
              <?php endif ?>
              <hr class="my-4">
                  <?php foreach ($jawaban_soals as $jawaban_soal): ?>
                    <div class="col-md-12">
                      <input type="radio" id="jawaban_user" name="jawaban_user" value="<?php echo $jawaban_soal['ID_JAWABAN_SOAL']; ?>"><p><?php echo $jawaban_soal['TEKS_JAWABAN_SOAL']; ?></p>
                    </div>
                  <?php endforeach ?>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <div class="p-2 bd-highlight align-self-center flex-fill">

  </div>
</div>
<?php echo form_close(); ?>