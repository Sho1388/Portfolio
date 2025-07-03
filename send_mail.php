<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 入力データを取得
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // 宛先とメールの詳細設定
    $to = "s2311@kcom.ac.jp";
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // メール送信
    if (mail($to, $subject, $body, $headers)) {
        echo "メッセージを送信しました";
    } else {
        echo "メッセージの送信に失敗しました";
    }
}
?>
