<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <p>Data: <span id="dataDisplay">{{ $data }}</span></p>
    <button id="refreshButton">Refresh Data</button>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
