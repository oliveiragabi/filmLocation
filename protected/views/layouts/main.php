<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"> 

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.min.css">
	<script>
		src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	 	crossorigin="anonymous">
	</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/npm.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<style>
	.breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #f5f5f5;
    border-radius: 4px;
}
</style>
<body>

<div style= "margin-top: 5%; margin-left: 15%;" >

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
</div>

<div class="container" id="page">

<!---	<div id="header">
		<div id="logo"><?php // echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header --> 

	<div id="wrap">

	<div id="mainmenu">
	<div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="http://127.0.0.1/sistemalocadora/index.php">Locadora de Filmes </a>
          </div>

           <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
             
              <li class="active"><a href="http://127.0.0.1/sistemalocadora/index.php">Inicio</a></li>
              
              <li><a href="http://127.0.0.1/sistemalocadora/index.php?r=site/page&view=about">Sobre</a></li>
              
              <li><a href="http://127.0.0.1/sistemalocadora/index.php?r=site/contact">Contato</a></li>
              
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filme <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://127.0.0.1/sistemalocadora/index.php?r=filme/index">Listar </a></li>
          </ul>
        </li>       

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aluguel <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://127.0.0.1/sistemalocadora/index.php?r=aluguel/index">Listar </a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a href="http://127.0.0.1/sistemalocadora/index.php?r=categoria/index">Listar </a></li>

          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Clientes <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a href="http://127.0.0.1/sistemalocadora/index.php?r=user/index">Listar </a></li>

          </ul>
        </li>

         <li><a href="http://127.0.0.1/sistemalocadora/index.php?r=site/login">Login <?php $this->widget('zii.widgets.CMenu',array(
      'items'=>array(
        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest)    
      ),

      //'items'=>array(
      //  array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)      
      //)
    )); ?></a></li> 

              

            </ul>
          </div><!--/.nav-collapse -->
      </div>
  </div>
</div>
	
	<!-- <?php /*$this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
	)); */
	?> -->


	</div><!-- mainmenu -->

	<?php echo $content; ?>

	<!-- <?php //var_dump($_SERVER['REMOTE_ADDR']); ?> -->

</div>

	<div class="clear"></div>

	<div id="footer" style="position:fixed; bottom:0; width:100%; text-align: center; padding: 10px; background-color: #e7e7e7;">
		 <div class="container">
        <?php echo Yii::powered(); ?>
      </div>
		
	</div><!-- footer -->




</div><!-- page -->

</body>
</html>
