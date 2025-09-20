<?php
// Назначьте свой email для получения сообщений
$to = "seabey799@yahoo.com"; // Замените на ваш Email

// Получаем данные из формы
$name = htmlspecialchars(trim($_POST['name']));
$phone = htmlspecialchars(trim($_POST['phone']));
$email = htmlspecialchars(trim($_POST['email']));
$message = htmlspecialchars(trim($_POST['message']));

// Тема письма
$subject = "Заявка с сайта от $name";

// Тело письма
$body = "Имя: $name\n";
$body .= "Телефон: $phone\n";
$body .= "Email: $email\n";
$body .= "Сообщение:\n$message";

// Заголовки
$headers = "From: no-reply@yourdomain.com\r\n"; // Можно указать ваш домен
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Отправка письма
if(mail($to, $subject, $body, $headers)){
    echo "Спасибо! Ваша заявка отправлена.";
} else {
    echo "Ошибка при отправке, попробуйте позже.";
}
?>
