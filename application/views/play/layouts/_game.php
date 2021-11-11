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
                <div class="p-2">B</div>
                <div class="p-2">I</div>
                <div class="p-2">N</div>
                <div class="p-2">G</div>
                <div class="p-2">O</div>
              </div>
            </div>
            <div class="card-body bg-primary">
              <?php $no = 1; ?>
              <?php for ($i=0; $i < 5; $i++) { ?>
                 <div class="d-flex flex-row justify-content-lg-between">
                <?php for ($g=0; $g < 5; $g++) { ?>
                  <?php if ($no == 13): ?>
                    <div class="p-2">
                      <a href="" class="btn btn-primary btn-lg btn-block disabled"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></a>
                    </div>
                  <?php else: ?>
                    <div class="p-2">
                      <a href="" class="btn btn-primary btn-lg btn-block"><?php echo $no; ?></a>
                    </div>
                    
                  <?php endif ?>
                  
                  <?php $no++; ?>
                <?php }?>
                </div>
              <?php } ?>
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

