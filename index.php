<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DangMinhDemoWebKey - Free Fire Vip</title>
    <style>
        :root {
            --primary-color: #00f2fe;
            --secondary-color: #4facfe;
            --accent-color: #ff00de;
        }

        body {
            background: #0f0c29;
            background: linear-gradient(to right, #24243e, #302b63, #0f0c29);
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 90%;
        }

        h1 {
            color: var(--primary-color);
            text-shadow: 0 0 10px var(--primary-color);
            font-size: 24px;
            margin-bottom: 10px;
        }

        .admin-tag {
            background: var(--accent-color);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 20px;
            display: inline-block;
        }

        p {
            color: #ccc;
            margin-bottom: 30px;
        }

        .btn-getkey {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 15px 30px;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 0 20px rgba(79, 172, 254, 0.4);
        }

        .btn-getkey:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px var(--primary-color);
        }

        .footer {
            margin-top: 20px;
            font-size: 10px;
            opacity: 0.5;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Get Key FreeFire VIP</h1>
    <div class="admin-tag">Admin: DangMinh</div>
    <p>Hệ thống cung cấp Key Free Fire miễn phí hằng ngày cho thành viên.</p>

    <?php
    if(isset($_POST['get_link'])) {
        // Cấu hình API Link4m của bạn
        $api_token = '686743fd8988f25f2e355b6c';
        
        // Link đích sau khi họ vượt qua Link4m (Ví dụ trang hiển thị Key)
        $destination_url = 'https://yourwebsite.com/showkey.php'; 
        
        $long_url = urlencode($destination_url);
        $api_url = "https://link4m.co/api-shorten/v2?api={$api_token}&url={$long_url}";
        
        $result = @json_decode(file_get_contents($api_url), TRUE);

        if($result["status"] === 'success') {
            $short_url = $result["shortenedUrl"];
            echo "<script>window.location.href='$short_url';</script>";
        } else {
            echo "<p style='color:red;'>Lỗi API: " . $result["message"] . "</p>";
        }
    }
    ?>

    <form method="POST">
        <button type="submit" name="get_link" class="btn-getkey">Bấm Lấy Key</button>
    </form>

    <div class="footer">
        DangMinhDemoWebKey © 2024
    </div>
</div>

</body>
</html>
