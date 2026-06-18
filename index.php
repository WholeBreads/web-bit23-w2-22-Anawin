<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค่าปริมาตรลูกบาศก์</title>
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
            margin-bottom: 10px;
            font-size: 28px;
        }
        
        .subtitle {
            text-align: center;
            color: #A9DAB5;
            margin-bottom: 30px;
            font-size: 14px;
            font-weight: 500;
        }
        
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
        }
        
        label {
            color: #333;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 14px;
        }
        
        input[type="number"] {
            padding: 12px;
            border: 2px solid #A9DAB5;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            font-family: inherit;
        }
        
        input[type="number"]:focus {
            outline: none;
            border-color: #7ac7a0;
            box-shadow: 0 0 8px rgba(169, 218, 181, 0.3);
        }
        
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        input[type="number"] {
            -moz-appearance: textfield;
        }
        
        input[type="submit"] {
            background-color: #A9DAB5;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        input[type="submit"]:hover {
            background-color: #7ac7a0;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(169, 218, 181, 0.4);
        }
        
        input[type="submit"]:active {
            transform: translateY(0);
        }
        
        .info {
            background-color: #f0f8f5;
            border-left: 4px solid #A9DAB5;
            padding: 12px;
            border-radius: 4px;
            font-size: 13px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🧮 ค่าปริมาตรลูกบาศก์</h1>
        <p class="subtitle">กรุณากรอกความยาวของแต่ละด้าน</p>
        
        <form action="result.php" method="post">
            <div class="form-group">
                <label for="side1">📏 ความยาวด้าน 1 (หน่วย)</label>
                <input type="number" id="side1" name="side1" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="side2">📏 ความยาวด้าน 2 (หน่วย)</label>
                <input type="number" id="side2" name="side2" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="side3">📏 ความยาวด้าน 3 (หน่วย)</label>
                <input type="number" id="side3" name="side3" step="0.01" required>
            </div>

            <input type="submit" value="คำนวณปริมาตร">
        </form>
        
        <div class="info">
            💡 สูตร: ปริมาตร = ด้าน 1 × ด้าน 2 × ด้าน 3
        </div>
    </div>
</body>
</html>