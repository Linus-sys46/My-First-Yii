<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?> - Service Provider Connector</title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => 'Service Provider Connector',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-light bg-light fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Find Services', 'url' => ['/site/services']],
            ['label' => 'Bookings', 'url' => ['/site/bookings']],
            ['label' => 'Messages', 'url' => ['/site/messages']],
            Yii::$app->user->isGuest
                ? ['label' => 'Login/Register', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<!-- <footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-4 text-center text-md-start">&copy; Service Provider Connector <?= date('Y') ?></div>
            <div class="col-md-4 text-center">
                <?= Html::a('Terms of Service', ['/site/terms']) ?> |
                <?= Html::a('Privacy Policy', ['/site/privacy']) ?>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <?= Html::dropDownList('language', Yii::$app->language, [
                    'en' => 'English',
                    'es' => 'Español',
                    'fr' => 'Français',
                ], ['id' => 'language-selector', 'class' => 'form-select form-select-sm']) ?>
            </div>
        </div>
    </div>
</footer> -->

<?php $this->endBody() ?>
<script>
// document.getElementById('language-selector').addEventListener('change', function() {
//     window.location.href = '<?= Yii::$app->urlManager->createUrl(['site/change-language']) ?>&language=' + this.value;
// });
</script>
</body>
</html>
<?php $this->endPage() ?>