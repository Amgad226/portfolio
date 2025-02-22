<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Navigation */
        .nav-bar {
            display: flex;
            /* justify-content: space-between; */
            align-items: center;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .nav-bar a {
            background: black;
            margin: 5px;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s ease;
        }

        .nav-bar a:hover {
            background: #555;
        }

        /* Table Styles */
        .table-container {
            overflow-x: auto;
            border-radius: 10px;
        }

        table {
            width: 100%;
            min-width: 600px;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            h1 {
                font-size: 1.5em;
            }
            table {
                font-size: 14px;
            }
            th, td {
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .nav-bar {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }
            table {
                font-size: 12px;
            }
            th, td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Navigation -->
    <div class="nav-bar">
        <a href="/">Home</a>
        <a href="/logout">Logout</a>
    </div>

    <h2>Visitor Statistics</h2>
    <p>Here are the statistics of visitor logs:</p>

    @foreach($group as $a)
    <p><strong>IP:</strong> {{$a["ip_address"]}} | <strong>Total Visits:</strong> {{$a["total"]}}</p>
    @endforeach

    <h1>Visitor Logs</h1>

    <!-- Table -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IP Address</th>
                    <th>Created At</th>
                    <th>User Agent</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visitors as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['ip_address'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $item['user_agent'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
