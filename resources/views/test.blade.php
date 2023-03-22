<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <wireui:scripts />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Test</title>
</head>
<body class="flex justify-center items-center h-full">
<div class="w-48">
    <div class="mb-1">
        <x-input right-icon="user" label="Name" placeholder="your name"/>
    </div>
    <div class="mt-1">
        <x-inputs.password label="Secret 🙈" value="I love WireUI ❤️"/>
    </div>
</div>
</body>
</html>
