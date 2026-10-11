<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter App</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin-top: 100px;
        }

        .counter {
            background-color: white;
            padding: 30px;
            margin: auto;
            width: 300px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        #count {
            font-size: 50px;
            font-weight: bold;
            margin: 20px;
            color: #007bff;
        }

        button {
            padding: 12px 18px;
            margin: 5px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            color: white;
        }

        .increase {
            background-color: #28a745;
        }

        .decrease {
            background-color: #dc3545;
        }

        .reset {
            background-color: #007bff;
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <div class="counter">
        <h1>Counter App</h1>

        <div id="count">0</div>

        <button class="decrease" onclick="decrease()">−</button>
        <button class="reset" onclick="reset()">Reset</button>
        <button class="increase" onclick="increase()">+</button>
    </div>

    <script>
        let count = 0;

        function increase() {
            count++;
            document.getElementById("count").textContent = count;
        }

        function decrease() {
            count--;
            document.getElementById("count").textContent = count;
        }

        function reset() {
            count = 0;
            document.getElementById("count").textContent = count;
        }
    </script>

</body>
</html>
