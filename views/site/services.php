 <?php
    /** @var yii\web\View */

   use yii\helpers\Html;

   $this->title = 'Services';
   $this->params['breadcrumbs'][]=['label'=> 'Login', 'url'=>['site/login']];
   $this->params['breadcrumbs'][] = $this->title;
 ?>
 <div class="site-about">
     <h1><?= Html::encode($this->title)?> </h1>
     <p>This is our services page</p> 
 </div>