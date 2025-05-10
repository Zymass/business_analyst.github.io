<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $user_email = $_POST['email'];
    $user_request = $_POST['request'];

    // Указываем вашу почту
    $to = "uwebmanager01@gmail.com";
    $subject = "Запрос на получение базы";

    // Составляем текст письма
    $message = "Новый запрос на получение базы.\n\n";
    $message .= "Email: " . $user_email . "\n";
    $message .= "Ключевой запрос: " . $user_request . "\n";

    // Заголовки письма
    $headers = "From: no-reply@yourdomain.com" . "\r\n" .
               "Reply-To: " . $user_email . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Спасибо за запрос! Мы скоро свяжемся с вами.";
    } else {
        echo "Произошла ошибка при отправке формы. Попробуйте позже.";
    }
}
?>