<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model melih058\products\models\Products */
/* @var $Categories sabsay03\categories\models\Categories */


$product=new melih058\products\models\Products();
$product=$model;
$product->save();
\yii\web\YiiAsset::register($this);
?>


<div class="col-xs-4">

    <div class="products-view">

        <h1><?= Html::encode($product->name) ?></h1>

        <p>
            <a >
                <img border="0" src="<?php echo $model->picture; ?>" width="300" height="200">
            </a>

        </p>

        <?= DetailView::widget([
            'model' => $product,
            'attributes' => [

                'name',
                'count',
                ]
        ]) ?>
        <?= DetailView::widget([
            'model' => $product->category,
            'attributes' => [

                'name',
            ]
        ]) ?>



<?php if(Yii::$app->user->id!=0) : ?>
        <?php if($product->count ==0) : ?>
            <p>

                <?= Html::button('Tükendi', ['class' => 'btn btn-danger']) ?>

            </p>
        <?php else : ?>
            <p>
            <?= Html::a('Sepete Ekle', ['addcart', 'id' => $model->id], [
                'class' => 'btn btn-primary',
                'data' => [
                    'confirm' => 'Ürünü almak istediğinizden emin misiniz?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?php endif; ?>


<?php else : ?>
    Sepete eklemek için giriş yapmalısınız.
<?php endif; ?>
        <?= Html::a('Yorumları Görüntüle', ['/reviews/reviews/index', 'id' => $model->id])?>



    </div>
</div>