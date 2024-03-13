<!DOCTYPE html>
<html>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/style/style.css">
    
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
