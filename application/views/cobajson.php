<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url()?>resources/bootstrap-413/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url()?>resources/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>resources/bootstrap-413/js/bootstrap.min.js"></script>
</head>

<body>

    <input type="text" class="cari" id="cari" name="cari">

    <button onclick="cobaSaja()">Show user</button>

    <p>Username : <span id="USERNAME_LOGIN"></span></p>

<script>
   const data_url = '<?php echo base_url('dashboard/testjson/'); ?>';
   

   async function cobaSaja(){
    var cari = document.getElementById("cari").value;
    var data_cari = data_url + cari;
    const respon = await fetch(data_cari);
    const data = await respon.json();
    document.getElementById('USERNAME_LOGIN').textContent = data.USERNAME_LOGIN;
   }

</script>
</body>
</html>