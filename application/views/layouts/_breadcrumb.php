<?php 
    $urls = array();
    $segments = $this->uri->segment_array();
    $last_uri = end($this->uri->segments);
    foreach($segments as $key=>$segment)
    {
        $TextBr = str_replace('_', ' ', $segment);
        $urls[] = array(
            site_url(
                implode( '/',array_slice($segments,0,$key)
            )
            ),$TextBr);
    }
 ?>
<ol class="breadcrumb float-sm-right">
<?php foreach ($urls as $key => $value): ?>
  <li class="breadcrumb-item <?= $last_uri ==  $value[1] ? "active" : "" ?>">
    <?php if ($last_uri !=  $value[1]): ?>
        <a href="<?php echo $value[0]; ?>">
    <?php endif ?>
    <?php echo ucwords($value[1]); ?>
    </a>
</li>
<?php endforeach ?>
</ol>
