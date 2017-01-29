<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CongressoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Congressos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congresso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Congresso'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
              'class' => 'yii\grid\SerialColumn'
            ],
            'nome:ntext',
            [
                'attribute' => 'data',
                'format' => ['date', 'EEEE, dd/MM/yyyy']
            ],
            [
              'class' => 'yii\grid\ActionColumn',
              'template' => '{update} {manage} {delete}',
              'buttons' => [
                'manage' => function ($model, $key, $index) {
                    $url = '#';
                    return Html::a('<span class="glyphicon glyphicon-list-alt"></span>', $url, [
                        'title' => Yii::t('yii', 'Manage'),
                    ]);
                }
              ]
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
