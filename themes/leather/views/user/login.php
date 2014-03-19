<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
    UserModule::t("Login"),
);
?>

<div class="login_box">
<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

    <div class="success">
        <?php echo Yii::app()->user->getFlash('loginMessage'); ?>
    </div>

<?php endif; ?>

<div class="login_ct">
    <div class="login"  id="log-box-div">

        <div class="login_form">
        <?php echo CHtml::beginForm(); ?>

        <p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?>

        <?php echo CHtml::errorSummary($model); ?>

        <div class="form_c">
            <div class="form_l"> <?php echo CHtml::activeLabelEx($model,'username'); ?></div>
            <?php echo CHtml::activeTextField($model,'username') ?>
        </div>

        <div class="form_c">
            <div class="form_l"><?php echo CHtml::activeLabelEx($model,'password'); ?></div>
            <?php echo CHtml::activePasswordField($model,'password') ?>
        </div>

        <div class="form_c">
            <div class="form_tip">
            <?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
            <?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
            <span class="cor_gray">使用公用电脑请勿勾选</span>
            </div>

        </div>

        <div class="form_c">
            <div class="form_submit">
            <?php echo CHtml::submitButton(UserModule::t("Login"))."&nbsp&nbsp&nbsp&nbsp". CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl). "|".CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?>

            </div>
        </div>
<div class="logo_b">
          <img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/image/logo_b.png" width="257" height="152"/>
      </div>
        <?php echo CHtml::endForm(); ?>


   </div>
</div>

    </div>
</div>
<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),
    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>
