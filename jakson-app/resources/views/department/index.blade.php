<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Departments</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Department Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
