<?php

use yii\helpers\Html;
use  sabsay03\categories\models\Categories;

/* @var $this yii\web\View */
/* @var $model melih058\products\models\Products */


$this->title = 'Create Products';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$Categories= new Categories();
?>
<?php if (Yii::$app->user->id==1):?>
<div class="products-create">



    <?= $this->render('_form', [
        'model' => $model,
        'categories'=>$Categories,

    ]) ?>

</div>
<?php else:?>
Sadece ID si 1  olan kullanıcı (Yani Admin) ürün ekleyebilir.
<?php endif;?>

