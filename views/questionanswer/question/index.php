<?php
/* @var $this QuestionController */
/* @var $dataProvider CActiveDataProvider */
?>

<style>
.vote_control .btn-xs:nth-child(1) {
    margin-bottom:3px;
}

.qanda-panel {
    margin-top:57px;
}

.qanda-header-tabs {
    margin-top:-49px;
}

</style>
<div class="container">

	<!-- Top Banner -->
    <div class="row" style="margin-bottom:20px;">
        <div class="col-md-12">
            <div class="panel panel-default panel-profile">
    			<div class="panel-profile-header">
        			<div class="image-upload-container" style="width: 100%; height: 100%; overflow:hidden;">
            			<img class="img-profile-header-background img-profile-header-background-qanda" id="space-banner-image" src="<?php echo Yii::$app->view->theme->baseUrl; ?>/img/tc-qanda-banner.png" style="width: 100%;" width="100%">
            
                        <div class="img-profile-data">
                            <h1 class="space">Community Knowledge Q&amp;A</h1>
                            <h2 class="space">A searchable repository of teaching knowledge.</h2>
                        </div>
        			</div>

                    <div class="image-upload-container profile-user-photo-container" style="width: 140px; height: 140px;">
                        <img class="img-rounded profile-user-photo" id="space-profile-image" src="<?php echo Yii::$app->view->theme->getBaseUrl(); ?>/img/tc-profile-qanda.png" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;">
                    </div>


    			</div>
			</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default qanda-panel">
                <?php echo $this->render('../../../../../protected/modules/questionanswer/views/partials/top_menu_bar');
                //TODO:: Paths ?>
                <div class="panel-body">

				<?php //_view or view??
                echo \yii\widgets\ListView::widget(([
                    'dataProvider'=>$dataProvider,
                    'itemView'=>function($model) {
                        return $this->render('../../../../../protected/modules/questionanswer/views/question/_view', ['data' => $model]);
                    }
                ]))
				?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: show content -->
