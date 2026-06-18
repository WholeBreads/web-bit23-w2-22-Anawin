<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .result-box {
            background: linear-gradient(135deg, #f0f8f5 0%, #e8f5f0 100%);
            border: 2px solid #A9DAB5;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
        }
        
        .result-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid rgba(169, 218, 181, 0.3);
        }
        
        .result-item:last-child {
            border-bottom: none;
        }
        
        .result-label {
            color: #555;
            font-weight: 500;
            font-size: 14px;
        }
        
        .result-value {
            color: #A9DAB5;
            font-weight: 700;
            font-size: 18px;
        }
        
        .volume-result {
            background-color: #A9DAB5;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin: 25px 0;
        }
        
        .volume-result-label {
            font-size: 14px;
            margin-bottom: 8px;
            opacity: 0.95;
        }
        
        .volume-result-value {
            font-size: 32px;
            font-weight: 700;
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }
        
        a, button {
            flex: 1;
            padding: 12px;
            border: 2px solid #A9DAB5;
            background-color: white;
            color: #A9DAB5;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }
        
        a:hover, button:hover {
            background-color: #A9DAB5;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(169, 218, 181, 0.4);
        }
        
        a:active, button:active {
            transform: translateY(0);
        }
        
        .error {
            background-color: #ffebee;
            border: 2px solid #ef5350;
            color: #c62828;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 ผลการคำนวณปริมาตร</h1>
        
        <?php
            // ตรวจสอบว่ามีข้อมูลที่ส่งมาหรือไม่
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['side1']) && isset($_POST['side2']) && isset($_POST['side3'])) {
                $side1 = floatval($_POST['side1']);
                $side2 = floatval($_POST['side2']);
                $side3 = floatval($_POST['side3']);
                
                // ตรวจสอบค่าว่าเป็นบวกหรือไม่
                if ($side1 > 0 && $side2 > 0 && $side3 > 0) {
                    $volume = $side1 * $side2 * $side3;
                    
                    echo '<div class="result-box">';
                    echo '<div class="result-item">';
                    echo '<span class="result-label">ด้าน 1:</span>';
                    echo '<span class="result-value">' . number_format($side1, 2) . ' หน่วย</span>';
                    echo '</div>';
                    
                    echo '<div class="result-item">';
                    echo '<span class="result-label">ด้าน 2:</span>';
                    echo '<span class="result-value">' . number_format($side2, 2) . ' หน่วย</span>';
                    echo '</div>';
                    
                    echo '<div class="result-item">';
                    echo '<span class="result-label">ด้าน 3:</span>';
                    echo '<span class="result-value">' . number_format($side3, 2) . ' หน่วย</span>';
                    echo '</div>';
                    echo '</div>';
                    
                    echo '<div class="volume-result">';
                    echo '<div class="volume-result-label">ปริมาตรลูกบาศก์</div>';
                    echo '<div class="volume-result-value">' . number_format($volume, 2) . ' ลบ.หน่วย</div>';
                    echo '</div>';
                } else {
                    echo '<div class="error">⚠️ กรุณากรอกค่าที่มากกว่า 0 เท่านั้น</div>';
                }
            } else {
                echo '<div class="error">❌ ข้อมูลไม่ถูกต้อง กรุณากลับไปกรอกแบบฟอร์มใหม่</div>';
            }
        ?>
        
        <div class="action-buttons">
            <a href="index.php">🔙 คำนวณใหม่</a>
        </div>
    </div>
</body>
</html>