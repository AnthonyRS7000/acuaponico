<!DOCTYPE html>
<html>
<head>
    <title>Data View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">DHT11 Data</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Temperature</th>
                <th>Humidity</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dht11Data as $data)
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['temperature'] }}</td>
                    <td>{{ $data['humidity'] }}</td>
                    <td>{{ $data['date'] }}</td>
                    <td>{{ $data['time'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="mt-5 mb-4">BMP180 Data</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pressure</th>
                <th>Temperature</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bmp180Data as $data)
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['pressure'] }}</td>
                    <td>{{ $data['temperature'] }}</td>
                    <td>{{ $data['date'] }}</td>
                    <td>{{ $data['time'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
