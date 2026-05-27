<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form class="w-full h-screen flex justify-center border items-center gap-2.5 flex-col" action="{{ URL('Check_Age') }}" method="post">
        @csrf
        <input placeholder="Enter your age" class="border w-1/2 h-12 p-2 rounded-md" type="number" name="age">
        <input class="border p-2 h-12 w-1/2 rounded-md" type="submit" value="Send">
    </form>
</body>
</html>