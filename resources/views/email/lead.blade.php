<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead From Midasgulf</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            background: #2c3e50;
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 20px -30px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .lead-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .table th {
            background: #34495e;
            color: white;
            padding: 12px;
            text-align: left;
            font-weight: bold;
        }

        .table td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        .table tr:nth-child(even) {
            background: #f8f9fa;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #7f8c8d;
            font-size: 14px;
        }

        .highlight {
            background: #e8f4fd;
            padding: 15px;
            border-left: 4px solid #3498db;
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>🚀 New Lead From Midasgulf</h1>
            <p>You have received a new lead inquiry</p>
        </div>

        <div class="lead-info">
            <h2 style="color: #2c3e50; margin-top: 0;">Lead Details</h2>

            <table class="table">
                <tr>
                    <th>Full Name</th>
                    <td>{{ $name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $country_code.' '.$phone }}</td>
                </tr>
                <tr>
                    <th>Details</th>
                    <td><a href="{{ $details }}" class="">View Here</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            <p><strong>Midasgulf</strong></p>
            <p>This email was generated automatically from the Midasgulf contact form.</p>
            <p>Received on: {{ now()->format('F j, Y \a\t g:i A') }}</p>
        </div>
    </div>
</body>

</html>