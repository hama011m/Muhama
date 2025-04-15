<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على البيانات من النموذج
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $discord_name = htmlspecialchars($_POST['discord_name']);
    $discord_id = htmlspecialchars($_POST['discord_id']);
    $experience = htmlspecialchars($_POST['experience']);
    $why_join = htmlspecialchars($_POST['why_join']);

    // رابط ويب هوك ديسكورد
    $webhook_url = "https://discord.com/api/webhooks/1354990015700271246/a5a9Z68Q3n-lWjx0dO_JQxepA-QbUfAGqdnMC1e50hlp-lxXXJVK8qfiw5hxOrWBG2hN"; // أضف رابط الويب هوك هنا

    // تنسيق البيانات لإرسالها إلى ديسكورد
    $json_data = json_encode([ 
        "embeds" => [
            [
                "title" => "📋 طلب إداري جديد | Enzo",
                "description" => "تم استلام طلب جديد للانضمام إلى فريق الإدارة",
                "color" => 7944437, // اللون الأرجواني
                "fields" => [
                    ["name" => "🔹 الاسم الكامل", "value" => $name, "inline" => true],
                    ["name" => "🔹 العمر", "value" => $age, "inline" => true],
                    ["name" => "🔹 اسم الديسكورد", "value" => $discord_name, "inline" => true],
                    ["name" => "🆔 معرف الديسكورد", "value" => $discord_id, "inline" => true],
                    ["name" => "💼 الخبرات والمهارات", "value" => $experience, "inline" => false],
                    ["name" => "❓ سبب الانضمام", "value" => $why_join, "inline" => false]
                ],
                "footer" => [
                    "text" => "Enzo Community • " . date("Y/m/d H:i")
                ],
                "thumbnail" => [
                    "url" => "https://cdn.discordapp.com/icons/1305208696980246683/7156c695126aac2dc5c8a0b399900867.png?size=512"
                ]
            ]
        ]
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    // إعداد وإرسال الطلب إلى ويب هوك ديسكورد
    $ch = curl_init($webhook_url);
    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $json_data,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10
    ]);
    
    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    // تسجيل الأخطاء إذا حدثت (لأغراض التصحيح)
    if ($error) {
        error_log("Discord Webhook Error: " . $error);
    }

    // التوجيه إلى صفحة النجاح
    header("Location: success.php");
    exit();
}
?>