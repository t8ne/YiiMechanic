<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FornecedorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Yii::$app->view->title = 'Fornecedores';
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="fornecedor-index">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>
    <p>
        <?= Html::a('Create Fornecedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Nome',
            'Telemovel',
            'Email:email',
            'Morada:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>