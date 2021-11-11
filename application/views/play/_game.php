
<div class="d-flex flex-column bd-highlight mb-3 align-content-around py-5">
  <div class="p-2 bd-highlight align-self-center"></div>
  <div class="p-2 bd-highlight">
    <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <!-- <?php 
            if ($this->session->flashdata('msg_benar') !='') {
                echo '<div class="alert alert-success" role="alert">';
                echo $this->session->flashdata('msg_benar');
                echo '</div>';
              } else if ($this->session->flashdata('msg_salah') !='') {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('msg_salah');
                echo '</div>';
              }
          ?> -->
          <div class="card border-dark shadow-2-strong" style="border-radius: 0.5rem;">
            <div class="card-header">
              <div class="d-flex flex-row justify-content-lg-between">
                <div class="p-2">B</div>
                <div class="p-2">I</div>
                <div class="p-2">N</div>
                <div class="p-2">G</div>
                <div class="p-2">O</div>
              </div>
            </div>
            <div class="card-body bg-primary">

              <?php $x = 1; ?>
                <div class="row d-flex justify-content-between">
                  <?php foreach ($soal_random as $soal): ?>
                    <?php $state=""; $btnStyle=""; ?>
                    <?php if ($soal['isAnswer'] == 1) {
                      $state = "disabled";
                      $btnStyle = "btn-warning";
                    } else if ($soal['isAnswer'] == 2){
                      $state = "disabled";
                      $btnStyle = "btn-danger";
                    }else{

                    }
                    ?>



                    <?php if (fmod($x,5) == 0): ?>
                      <div class="col-lg-2 col-md-6">
                        <a href="<?php echo base_url('play/lihat_soal/' . $soal['ID_SOAL_PELAJARAN']) . '/'?>" class="btn <?php echo $state; ?> <?php echo $btnStyle; ?> btn-primary btn-block">
                         <?php echo $x ?>
                       </a>
                      </div>
                      </div>   
                      <div class="row d-flex justify-content-between">
                    <?php else: ?>
                     <div class="col-lg-2 col-md-6">
                       <a href="<?php echo base_url('play/lihat_soal/' . $soal['ID_SOAL_PELAJARAN']) . '/'?>" class="btn <?php echo $state; ?> <?php echo $btnStyle; ?> btn-primary btn-block">
                         <?php echo $x ?>
                       </a>
                     </div>    
                    <?php endif ?> 
                    <?php $x++; ?> 
                  <?php endforeach ?>    
                </div>

              </div>

              <div class="card-footer">
                <a href="<?php echo base_url('play/akhiri_permainan') ?>" class="btn btn-danger btn-block">
                  Akhiri permainan
                </a>
              </div>
    
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