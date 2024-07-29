<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "chiu20013721@gmail.com"; // 你的电子邮件地址
    $subject = "有人对你的服务感兴趣";
    $message = "有人希望雇用你，请尽快联系他们。";
    $headers = "From: webmaster@example.com"; // 发件人的电子邮件地址

    // 发送邮件
    if (mail($to, $subject, $message, $headers)) {
        echo '<div class="alert alert-success">邮件发送成功！我们会尽快联系你。</div>';
    } else {
        echo '<div class="alert alert-danger">邮件发送失败，请稍后再试。</div>';
    }
}
?>