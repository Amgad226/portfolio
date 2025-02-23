<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.png">

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
            border: #333 2px solid;
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
            background: #333;
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

        th,
        td {
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

            th,
            td {
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

            th,
            td {
                padding: 8px;
            }
        }

        button {
            padding: 8px;
            margin: 10px;
            border-radius: 10px;
            background: #333;
            color: #FFF;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;

        }

        button:hover {
            background: #575757;
       

        }
    </style>
</head>

<body>

    <div class="container">
        <div class="nav-bar">
            <a href="/">Home</a>
            <a href="/logout">Logout</a>
        </div>

        <h1>Visitor Sessions:{{ count($sessions) }}</h1>
        <div class="table-container">
            <button onclick="toggleTable('session')">Show Sessions</button>

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>IP Address</th>
                        <th>User Agent</th>
                        <th>Last Activity</th>
                    </tr>
                </thead>
                <tbody id="session" style="display: none">
                    @foreach ($sessions as $key => $item)
                        <tr style="{{ $item->id == session()->id() ? 'background:#FF4' : '' }}">
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->ip_address }}</td>
                            <td>{{ $item->user_agent }}</td>
                            <td>{{ date('m/d/Y H:i:s', $item->last_activity) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <br><br>
        <hr>
        <br><br>


        <h1>Grouped Visitor Logs: {{ count($group) }}</h1>
        <button onclick="toggleTable('group')">Show grouped logs</button>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>IP Address:</th>
                        <th>Total Visits:</th>
                        <th>User Agent:</th>
                    </tr>
                </thead>
                <tbody id="group" style="display: none;">
                    @foreach ($group as $key => $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item['ip_address'] }}</td>
                            <td>{{ $item['total'] }}</td>
                            <td>{{ $item['user_agent'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br><br>
        <hr>
        <br><br>


        <h1>Visitor Logs:{{ count($visitors) }}</h1>


        <button onclick="toggleTable('logs')">Show logs</button>
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
                <tbody id="logs" style="display: none;">
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

    <script>
        function toggleTable(tableId) {
            var sessionTable = document.getElementById(tableId);
            sessionTable.style.display = sessionTable.style.display === "none" ? "table-row-group" : "none";
        }
    </script>
</body>

</html>
