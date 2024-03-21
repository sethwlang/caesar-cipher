<div>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caesar Cipher</title>
</head>
<body>
    <div id="app">
        <caesar-cipher></caesar-cipher>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
</div>