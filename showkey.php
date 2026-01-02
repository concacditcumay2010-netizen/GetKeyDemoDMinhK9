<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận Key Thành Công - DangMinh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --success-color: #00ff88;
            --bg-dark: #0f0c29;
            --neon-pink: #ff00de;
        }

        body {
            background: var(--bg-dark);
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: white;
            font-family: 'Segoe UI', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 25px;
            backdrop-filter: blur(15px);
            border: 2px solid var(--success-color);
            box-shadow: 0 0 20px rgba(0, 255, 136, 0.2);
            text-align: center;
            max-width: 450px;
            width: 90%;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .icon-check {
            font-size: 50px;
            color: var(--success-color);
            margin-bottom: 15px;
            text-shadow: 0 0 15px var(--success-color);
        }

        h2 { margin: 10px 0; color: #fff; }

        .key-box {
            background: rgba(0, 0, 0, 0.5);
            border: 1px dashed var(--success-color);
            padding: 20px;
            margin: 20px 0;
            font-size: 24px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            color: var(--success-color);
            letter-spacing: 2px;
            cursor: pointer;
            position: relative;
            transition: 0.3s;
        }

        .key-box:hover {
            background: rgba(0, 255, 136, 0.1);
        }

        .btn-copy {
            background: var(--success-color);
            color: #000;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: 0.3s;
        }

        .btn-copy:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px var(--success-color);
        }

        .note {
            font-size: 13px;
            color: #aaa;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="icon-check"><i class="fas fa-check-circle"></i></div>
    <h2>Vượt Link Thành Công!</h2>
    <p>Chúc mừng bạn, đây là mã Key VIP của bạn:</p>

    <div class="key-box" id="keyText">
        <?php 
            // Bạn có thể đổi mã Key cố định hoặc dùng hàm tạo key ngẫu nhiên
            $randomKey = "FF-VIP-" . strtoupper(bin2hex(random_bytes(4)));
            echo $randomKey;
        ?>
    </div>

    <button class="btn-copy" onclick="copyKey()">Sao chép Key</button>

    <div class="note">
        <i class="fas fa-info-circle"></i> Key có hiệu lực trong 24h.<br>
        Admin: <strong>DangMinh</strong>
    </div>
</div>

<script>
function copyKey() {
    var keyText = document.getElementById("keyText").innerText;
    navigator.clipboard.writeText(keyText).then(function() {
        alert("Đã sao chép Key thành công: " + keyText);
    }, function() {
        alert("Lỗi khi sao chép!");
    });
}
</script>

</body>
</html>
