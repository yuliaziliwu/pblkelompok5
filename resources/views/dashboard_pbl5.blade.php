<!DOCTYPE html>
<html>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <body>
        <div class="w-236 h-100 bg-sky-100 opacity-2 mx-0 mr-0 mt-0 pt-6 px-8 pt-8">
    <h1>Welcome to the Dashboard</h1>
    <p>Data: <span id="dataDisplay">{{ $data }}</span></p>
    <button id="refreshButton">Refresh Data</button>
    <!-- yulia -->
    <div>
    <img src="{{ asset('images/yulia1.jpg') }}" alt="images" class="w-100 h-50 m-2">
    <img src="{{ asset('images/yulia2.jpg') }}" alt="images" class="w-100 h-50 m-2">
    </div>
</div>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
