<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('carousel.css'); ?>
	<style>
		a{
			color: #883ced;
		}
		a:hover{
			color: #af4cf0;
		}
        .btn.btn-primary{
            color:#ffffff!important;
            background-color:#883ced;
            background-repeat:repeat-x;
            background-image:-khtml-gradient(linear, left top, left bottom, from(#fd6ef7), to(#883ced));
            background-image:-moz-linear-gradient(top, #fd6ef7, #883ced);
            background-image:-ms-linear-gradient(top, #fd6ef7, #883ced);
            background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #fd6ef7), color-stop(100%, #883ced));
            background-image:-webkit-linear-gradient(top, #fd6ef7, #883ced);
            background-image:-o-linear-gradient(top, #fd6ef7, #883ced);
            background-image:linear-gradient(top, #fd6ef7, #883ced);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fd6ef7', endColorstr='#883ced', GradientType=0);
            text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);
            border-color:#883ced #883ced #003f81;
            border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        }
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-danger">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="col-md-12">
<?php echo $content; ?>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
                <p>&copy; Company 2014</p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<?php echo Asset::js('bootstrap.js'); ?>
</body>
</html>
