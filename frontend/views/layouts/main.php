<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="Wahyu Fatur Rizky" content="e-SAKIP SUMATERA UTARA">
	<?php $this->registerCsrfMetaTags() ?>
	<title>e-SAKIP SUMUT - <?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>

	<link href="/images/favicon.ico" rel="icon" />

</head>

<body data-spy="scroll" data-target=".navbar" class="has-loading-screen" id="page-top">
	<?php $this->beginBody() ?>

	<div class="ts-page-wrapper" id="page-top">
		<?= $content?>
	</div>
	<!--end page-->

	<script>
		if (document.getElementsByClassName("ts-full-screen").length) {
			document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
		}
	</script>

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
