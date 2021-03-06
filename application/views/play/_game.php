
<div class="d-flex flex-column bd-highlight mb-3 align-content-around py-5">
  <div class="p-2 bd-highlight align-self-center"></div>
  <div class="p-2 bd-highlight">
    <section class="vh-100">
    <div class="container py-5 h-100">
      <!-- <div class="row d-flex justify-content-center align-items-center h-100"> -->
        <!-- <div class="col-12 col-md-8 col-lg-6 col-xl-5"> -->
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
          <div class="row">
            <div class="col-8">
              <div class="card border-dark shadow-2-strong bg-light" style="border-radius: 0.5rem;">
              <div class="card-header">
                <div class="d-flex flex-row justify-content-lg-between">
                  <div class="p-2"><h1>B</h1></div>
                  <div class="p-2"><h1>I</h1></div>
                  <div class="p-2"><h1>N</h1></div>
                  <div class="p-2"><h1>G</h1></div>
                  <div class="p-2"><h1>O</h1></div>
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
                           <?php echo $soal['NUMB_BOARD']; ?>
                         </a>
                        </div>
                        </div>   
                        <div class="row d-flex justify-content-between">
                      <?php else: ?>
                       <div class="col-lg-2 col-md-6">
                         <a href="<?php echo base_url('play/lihat_soal/' . $soal['ID_SOAL_PELAJARAN']) . '/'?>" class="btn <?php echo $state; ?> <?php echo $btnStyle; ?> btn-primary btn-block">
                           <?php echo $soal['NUMB_BOARD']; ?>
                         </a>
                       </div>    
                      <?php endif ?> 
                      <?php $x++; ?> 
                    <?php endforeach ?>    
                  </div>

                </div>

                <div class="card-footer bg-dark">
                  <div class="text-center text-white">
                    <strong><p>Warna <span class="text-danger">Merah</span> jika jawaban anda salah.<br /> Warna <span class="text-warning">Kuning</span> jika jawaban anda benar</p></strong>
                  </div>
                  <a href="<?php echo base_url('play/akhiri_permainan') ?>" class="btn btn-danger btn-block">
                    Akhiri permainan
                  </a>
                </div>
      
              </div>
            </div>

            <div class="col-4">
              <div class="card">
                <h5 class="card-header bg-info text-white">List User</h5>
                <div class="card-body">
                  <div style="height: 325px; overflow: scroll;">
                    <table class="table">
                      <tbody>
                        <?php foreach ($list_pemain as $pemain): ?>
                          <tr>
                            <td>
                              <img src="<?php echo base_url('resources/img/user_no_photo.png'); ?>" width="32" height="32">
                            </td>
                            <td>
                              <?php echo $pemain['NAMA_PEMAIN']; ?>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
            
          </div>

          
          <!-- </div> -->
        <!-- </div> -->
      </div>
    </div>
  </section>
  </div>
  <div class="p-2 bd-highlight align-self-center flex-fill">
    <div class="container bg-primary text-white">
      
    </div>
  </div>
</div>