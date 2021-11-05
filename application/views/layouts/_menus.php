<ul class="nav nav-pills nav-sidebar flex-column" id="myMenu" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
       <?php
 
        $CI =& get_instance();
        $CI->load->model('Ext_model');
        $main = $CI->Ext_model->getAksesMenu($this->session->userdata('ID_STATUS_USER'));
        $TextBr = ucwords(str_replace('_', ' ', $this->uri->segment(1)));
       ?>

       <?php foreach ($main as $main_menu): ?>
        <?php
         $this->db->order_by('TEKS_MENU');
         $sub = $this->db->get_where('tbl_detail_menu',array('ID_PARENT' => $main_menu->ID_DETAIL_MENU)); ?>
        <?php if ($sub->num_rows() > 0): ?>
          <li class="nav-item <?= $TextBr ==  $main_menu->TEKS_MENU ? "menu-open" : "" ?>">
            <a href="<?php echo base_url($main_menu->LINK); ?>" class="nav-link <?= $TextBr ==  $main_menu->TEKS_MENU ? "active" : "" ?>">
              <i class="nav-icon <?php echo $main_menu->ICONS; ?>"></i>
              <p>
                <?php echo $main_menu->TEKS_MENU; ?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <?php foreach ($sub->result() as $sub_menu): ?>
              <?php $ss_m =  explode(" ", $sub_menu->TEKS_MENU) ;?>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url($sub_menu->LINK); ?>" class="nav-link <?= ucwords(end($this->uri->segments)) == $ss_m[0]  && $TextBr ==  $main_menu->TEKS_MENU ? "active" : "" ?>">
                  <i class="nav-icon far fa-circle"></i>
                  <p> <?php echo $sub_menu->TEKS_MENU; ?></p>
                </a>
              </li>
            </ul>
            <?php endforeach ?>
          </li>

        <?php else: ?>
          <li class="nav-item">
            <a href="<?php echo base_url($main_menu->LINK); ?>" class="nav-link <?= $TextBr ==  $main_menu->TEKS_MENU ? "active" : "" ?>">
              <i class="nav-icon <?php echo $main_menu->ICONS; ?>"></i>
              <p><?php echo $main_menu->TEKS_MENU; ?></p>
            </a>
          </li>
        <?php endif ?>
       <?php endforeach ?>

  <li class="nav-item">
    <a href="<?php echo site_url('dashboard/logout') ?>" class="nav-link">
      <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
      <p class="text">Logout</p>
    </a>
  </li>

</ul>