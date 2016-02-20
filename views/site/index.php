<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'One',
            'active' => true,
            'content' => $this->render('_tab-content'),
        ],
        [
            'label' => 'Two',
            'content' => $this->render('_tab-content'),
        ],
        [
            'label' => 'Three',
            'content' => $this->render('_tab-content'),
        ]
    ]
]); ?>
