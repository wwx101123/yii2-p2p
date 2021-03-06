<?php 

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use frontend\assets\AppAsset;
    
    $this->title = '注册协议';
    AppAsset::register($this);
    //echo '<pre/>';var_dump($memberdata);exit;
?>

<!-- content product begin-->
<div class="main-cloum">
    <div class="q-wide">
        <div class="xymsbox">
            <h2 style="text-align: center">“易联认证快付”服务开通协议</h2>
            <p>本协议由 “易联认证快付”的第三方支付服务商——易联支付有限公司与希望并同意使用“易联认证快付”向“易联认证快付”加盟商户支付交易款项的用户（以下简称“您”）共同订立。</p>
            <p><b>一、关于“易联认证快付”</b></p>
            <p>易联支付有限公司（以下简称“易联支付”），是经中国人民银行许可成立并接受中国人民银行监管的支付服务机构。用户申请“易联认证快付”时，将银行卡（含借记卡及信用卡）与其在商户的注册账户关联。在首次使用“易联认证快付”时，系统平台即时呼叫用户手机进行使用安全验证。通过“易联认证快付”使用安全验证后，开通“易联认证快付”。用户下次在购物/充值，确认订单并选择“易联认证快付”支付订单金额的, 无需输入银行卡信息（卡号或密码、验证码），只需确认提交用户在商户注册帐户的验认信息和支付信息，即可轻松安全地完成订单金额的支付。</p>
            <p><b>二、 声明与承诺</b></p>
            <p>1、您确认，您已充分阅读、理解并接受本协议的全部内容，一旦您通过网络页面点击确认或以其他方式选择接受本协议，即表示您与易联支付已达成协议并同意接受本协议的全部约定内容。在接受本协议之前，请您仔细阅读本协议的全部内容（特别是以粗体下划线标注的内容）。如果您不同意本协议的任意内容，请不要进行后续操作。</p>
            <p>2、您确认，在您（包括您的代理人）同意接受本协议并申请开通相关业务功能时，易联支付有理由相信您及您的代理人是具有完全民事权利能力和民事行为能力，能够独立承担民事责任的自然人。不具备前述条件的，您应立即停止申请使用本服务。</p>
            <p><b>三、易联"认证快付"使用安全验证</b></p>
            <p>1、在您接受本协议并首次使用“易联认证快付”时，“易联认证快付”将根据您上述提供的银行卡卡号、身份证号码，核实您所提供银行卡的真实性，并使用IVR语音系统呼叫您的手机。您需要按照IVR语音播报信息指示，输入相应银行卡信息（借记卡密码或信用卡验证码），经发卡银行验证无误并成功完成首次支付，方通过“易联认证快付”的使用安全验证</p>
            <p>2、自您通过“易联认证快付”使用安全验证时起，本协议正式生效。“易联认证快付”为您开通，您下次在购物将充分体验到“易联认证快付”的快捷与便利。</p>
            <p><b>四、易联"认证快付"使用规则</b></p>
            <p>1、您同意自本协议生效日起，您在确认订单并选择“易联认证快付”的，您正确输入账户信息，即代表您授权发卡银行从指定银行卡账户支付订单金额给商户。</p>
            <p>2、您同意，“易联认证快付”仅为您提供交易款项的支付服务。您就商品或服务发生的任何争议应由您与商户解决，易联支付将不承担任何责任。</p>
            <p>3、为保障您的支付成功，在确认订单并选择“易联认证快付”时，您应保障指定银行卡余额或授信额度足以支付订单金额。因您指定银行卡余额或授信额度不足导致支付失</p>
        </div>
    </div>
</div>
<!-- content product end-->



<?php $this->beginBlock('test'); ?>

<?php $this->endBlock()  ?>
<!-- 将数据块 注入到视图中的某个位置 -->
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>