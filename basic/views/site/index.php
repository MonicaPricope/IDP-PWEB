<?php


/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class = "container">
            <div class="row justify-content-around">
                <div class="main-buttons col-4">
                  <p><a class="main-btn btn btn-outline-success" href="/basic/web/index.php?r=user%2Fcreate">Register to find a shelter</a></p>
                  <p><a class="main-btn btn btn-outline-success" href="/basic/web/index.php?r=user%2Fcreate">Register to add a shelter</a></p>
                  <p><a class="main-btn btn btn-outline-success" href="/basic/web/index.php?r=site%2Flogin">Login</a></p>
                </div>
                <div class="main-display col-4">
                  <img src="<?= Yii::$app->request->baseUrl ?>/img/peace-1.png" alt="this is an alternative text" />
                  <div class="main-text">
                       <p>Be safe!</p>
                    <p>Find a shelter</p>
                  </div>
                </div>
             </div>
        </div>
    </div>
</div>
<script type="javascript">
</script>
