<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <p>Data: <span id="dataDisplay">{{ $data }}</span></p>
    <button id="refreshButton">Refresh Data</button>
    <!-- yulia -->
    <div style="display:flex;">
    <img src="{{ asset('images/yulia1.jpg') }}" alt="images" style="width:40%">
    <img src="{{ asset('images/yulia2.jpg') }}" alt="images" style="width:40%">
</div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
