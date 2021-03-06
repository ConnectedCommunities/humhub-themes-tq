<?php

use yii\helpers\Html;
?>

<div class="panel panel-default members" id="space-members-panel">
    <?php echo \humhub\widgets\PanelMenu::widget(['id' => 'space-members-panel']); ?>
    <div class="panel-heading"><?php echo Yii::t('SpaceModule.widgets_views_spaceMembers', '<strong>Circle</strong> members'); ?></div>
    <div class="panel-body">
        <?php foreach ($members as $membership) : ?>
            <?php $user = $membership->user; ?>
            <a class="profile-size-xs pull-left" href="<?php echo $user->getUrl(); ?>">
                <img src="<?php echo $user->getProfileImage()->getUrl(); ?>" class="img-rounded profile-size-xs tt img_margin"
                     height="24" width="24" alt="24x24" data-src="holder.js/24x24"
                     style="width: 24px; height: 24px;" data-toggle="tooltip" data-placement="top" title=""
                     data-original-title="<?php echo Html::encode($user->displayName); ?>">

                <div class="profile-overlay-img profile-overlay-img-xs tt" data-toggle="tooltip" data-placement="top" data-html="true" title=""
                     data-original-title="<?php echo Html::encode($user->displayName); ?>"></div>

            </a>
        <?php endforeach; ?>
        <?php if (count($members) == $maxMembers) : ?>
            <br>
            <a href="<?php echo $space->createUrl('/space/membership/members-list'); ?>" data-target="#globalModal" class="btn btn-default btn-sm"><?php echo Yii::t('SpaceModule.widgets_views_spaceMembers', 'Show all'); ?></a>
        <?php endif; ?>
    </div>
</div>