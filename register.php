<?php
require_once 'config.php';

include 'head.php';
?>

<div class="container">
    <?php
        if($allow_register){
            echo '<div class="alert alert-success" role="alert">开放注册中，邀请码为：'.$invite_code.'。</div>';
        }else{
            echo '<div class="alert alert-success" role="alert">欢迎加入我们！</div>';
        }
    ?>


    <form method="post" action="register_db.php">
        <div class="input-group">
            <span class="input-group-addon" >用户名：</span>
            <input type="text" class="form-control" placeholder="Username" name="username">
        </div>

        <div class="input-group mt20">
            <span class="input-group-addon" >邮箱：</span>
            <input type="email" class="form-control" placeholder="email" name="email">
        </div>

        <div class="input-group mt20">
            <span class="input-group-addon" >年龄：</span>
            <input type="number" class="form-control" placeholder="age" name="age">
        </div>

        <div class="input-group mt20">
            <span class="input-group-addon" >密码：</span>
            <input type="password" class="form-control" placeholder="password" name="password">
        </div>
        <div class="input-group mt20">
            <span class="input-group-addon" >重复密码：</span>
            <input type="password" class="form-control" placeholder="repeat password" name="repeat_password">
        </div>
        <div class="input-group mt20">
            <span class="input-group-addon" >注册邀请码：</span>
            <input type="text" class="form-control" placeholder="Invite Code" name="invite_code">
        </div>
        <br><br>
        <span class="s1">性&nbsp;&nbsp;&nbsp;&nbsp;别：男</span>
        <input type="radio" name="sex" value="男" checked="checked" />
        OR
        <span class="s1">女</span>
        <input type="radio" name="sex" value="女" />
        <h3 class="text-center">网站条款</h3>
        <textarea readonly="readonly" rows="10" class="form-control">
一、总则

1．1　用户应当同意本协议的条款并按照页面上的提示完成全部的注册程序。用户在进行注册程序过程中点击"同意"按钮即表示用户与百度公司达成协议，完全接受本协议项下的全部条款。
1．2　用户注册成功后，百度将给予每个用户一个用户帐号及相应的密码，该用户帐号和密码由用户负责保管；用户应当对以其用户帐号进行的所有活动和事件负法律责任。
1．3　用户可以使用百度各个频道单项服务，当用户使用百度各单项服务时，用户的使用行为视为其对该单项服务的服务条款以及百度在该单项服务中发出的各类公告的同意。
1．4　百度会员服务协议以及各个频道单项服务条款和公告可由百度公司随时更新，且无需另行通知。您在使用相关服务时,应关注并遵守其所适用的相关条款。
　　您在使用百度提供的各项服务之前，应仔细阅读本服务协议。如您不同意本服务协议及/或随时对其的修改，您可以主动取消百度提供的服务；您一旦使用百度服务，即视为您已了解并完全同意本服务协议各项内容，包括百度对服务协议随时所做的任何修改，并成为百度用户。

二、注册信息和隐私保护

2．1　百度帐号（即百度用户ID）的所有权归百度，用户完成注册申请手续后，获得百度帐号的使用权。用户应提供及时、详尽及准确的个人资料，并不断更新注册资料，符合及时、详尽准确的要求。所有原始键入的资料将引用为注册资料。如果因注册信息不真实而引起的问题，并对问题发生所带来的后果，百度不负任何责任。
2．2　用户不应将其帐号、密码转让或出借予他人使用。如用户发现其帐号遭他人非法使用，应立即通知百度。因黑客行为或用户的保管疏忽导致帐号、密码遭他人非法使用，百度不承担任何责任。

三、使用规则

3．1　用户在使用百度服务时，必须遵守中华人民共和国相关法律法规的规定，用户应同意将不会利用本服务进行任何违法或不正当的活动，包括但不限于下列行为∶
（1）上载、展示、张贴、传播或以其它方式传送含有下列内容之一的信息：
1） 反对宪法所确定的基本原则的； 2） 危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的； 3） 损害国家荣誉和利益的； 4） 煽动民族仇恨、民族歧视、破坏民族团结的； 5） 破坏国家宗教政策，宣扬邪教和封建迷信的； 6） 散布谣言，扰乱社会秩序，破坏社会稳定的； 7） 散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的； 8） 侮辱或者诽谤他人，侵害他人合法权利的； 9） 含有虚假、有害、胁迫、侵害他人隐私、骚扰、侵害、中伤、粗俗、猥亵、或其它道德上令人反感的内容； 10） 含有中国法律、法规、规章、条例以及任何具有法律效力之规范所限制或禁止的其它内容的；
（2）不得为任何非法目的而使用网络服务系统；
（3）不利用百度服务从事以下活动：
1) 未经允许，进入计算机信息网络或者使用计算机信息网络资源的；
2) 未经允许，对计算机信息网络功能进行删除、修改或者增加的；
3) 未经允许，对进入计算机信息网络中存储、处理或者传输的数据和应用程序进行删除、修改或者增加的；
4) 故意制作、传播计算机病毒等破坏性程序的；
5) 其他危害计算机信息网络安全的行为。
			</textarea>
        <div class="alert alert-warning mt20" role="alert">注意：当你点击确定注册按钮表示你已经同意以上条款！</div>
        <div class="btn_box center-block">
            <button type="submit" name="submit" class="btn btn-success mt20 " >确定注册</button>
            <a type="button" class="btn btn-primary mt20">返回登录</a>
        </div>

    </form>



</div>


<script src="js/myjs.js"></script>
<script>
    window.onload=function(){
        headbtn(100);
    }

</script>
<?php

include 'foot.php';
?>