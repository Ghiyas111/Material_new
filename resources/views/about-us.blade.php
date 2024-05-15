<!-- resources/views/about.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 50px 0;
            background-color: #007bff;
            color: white;
        }
        .header h1 {
            margin: 0;
            font-size: 48px;
        }
        .content {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .content h2 {
            margin-top: 0;
        }
        .team {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .team-member {
            flex: 1 1 calc(33.333% - 20px);
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .team-member h3 {
            margin: 10px 0 5px;
        }
        .team-member p {
            margin: 0;
            color: #666;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
        }
        @media (max-width: 768px) {
            .team-member {
                flex: 1 1 calc(50% - 20px);
            }
        }
        @media (max-width: 480px) {
            .team-member {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>About Us</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Our Mission</h2>
            <p>Our mission is to provide the best services to our customers with a focus on quality and innovation. We strive to exceed expectations and deliver exceptional value.</p>
        </div>
        <div class="content">
            <h2>Our Team</h2>
            <div class="team">
                <div class="team-member">
                    <img src="{{ asset('images/member1.jpg') }}" alt="Member 1">
                    <h3>John Doe</h3>
                    <p>CEO</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/member2.jpg') }}" alt="Member 2">
                    <h3>Jane Smith</h3>
                    <p>CTO</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/member3.jpg') }}" alt="Member 3">
                    <h3>Mike Johnson</h3>
                    <p>COO</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Our Company. All rights reserved.</p>
    </div>
</body>
</html>
