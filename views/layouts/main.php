<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Mensaje', 'url' => ['/site/mensaje1']],
            ['label' => 'Gestor de noticias', 'url' => ['/noticias']],
            ['label' => 'Listar noticias', 'url' => ['/noticias/listado']],
            ['label' => 'Consultas', 'url' => ['#'],
                'template' => '<a href="{url}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
                'items' => [
                                    ['label' => 'Consulta 1', 'url' => ['/noticias/consulta1']],
                                    ['label' => 'Consulta 2', 'url' =>['/noticias/consulta2']],
                                    ['label' => 'Consulta 3', 'url' =>['/noticias/consulta3']],
                                    ['label' => 'Consulta 3a', 'url' =>['/noticias/consulta3a']],
                                    ['label' => 'Consulta 3b', 'url' =>['/noticias/consulta3b']],
                                    ['label' => 'Consulta 4a', 'url' =>['/noticias/consulta4']],
                                    ['label' => 'Consulta 4b', 'url' =>['/noticias/consulta4a']],
                                    ['label' => 'Consulta 5', 'url' =>['/noticias/consulta5']],
                                   ['label' => 'Consulta 5a', 'url' =>['/noticias/consulta5a']],
                            ],
            
            ],     
        ],
    ]);
    NavBar::end();
    ?>
//este div contiene las vistas de pan y los mensajes de error y demas en Alert::widget
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>    
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">Desarrollado por Roberto</p>

        <p class="pull-right">Año 2019</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
