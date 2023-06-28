<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content='<?= $description?>'>
  <meta name="author" content="Juan Carreno">
  <meta name="robots" content="no-cache" />
  <meta name="keywords" content="'<?= $keywords?>'" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />


    <title> <?= $title?> </title>

	<!-- core CSS -->

    <!-- <link href="<?=base_url()?>plantillas/css/bootstrap.css" rel="stylesheet"> -->
    <link href="<?=base_url()?>plantillas/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>plantillas/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>plantillas/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- <link href="<?=base_url()?>plantillas/css/animate.min.css" rel="stylesheet"> -->
    <!-- <link href="<?=base_url()?>plantillas/css/prettyPhoto.css" rel="stylesheet"> -->
    <link href="<?=base_url()?>plantillas/css/intranet.css" rel="stylesheet">
    <link href="<?=base_url()?>plantillas/css/responsive.css" rel="stylesheet">


    <link href="<?=base_url()?>plantillas/css/sb-admin-2.css" rel="stylesheet">

      <link href="<?=base_url()?>plantillas/css/bootstrap-datepicker.css" rel="stylesheet">
      <link href="<?=base_url()?>plantillas/css/bootstrap-toggle.min.css" rel="stylesheet">


    <link rel="shortcut icon" href="<?=base_url()?>plantillas/images/logoIpot70.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>plantillas/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>plantillas/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>plantillas/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>plantillas/images/ico/apple-touch-icon-57-precomposed.png">

<script src="<?=base_url()?>plantillas/js/jquery.js"></script>
<script>
    var t=false;
    function contar(){
    if(t)
        clearTimeout(t);
    s=arguments[0] || 0;
    if(s>7200)
        location.reload();
    //console.log("juan: "+s);
    s++;
    t=setTimeout("contar("+s+")",1000);
    }
    window.onload=document.onmousemove=contar;
</script>
</head><!--/head-->
