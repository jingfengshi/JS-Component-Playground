<!doctype html>
<html lang="en" xmlns:v-slot="http://www.w3.org/1999/XSL/Transform">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Context menu</title>
</head>
<body>
<div id="app" class="flex flex-col items-center p-8">
    <h1 class="text-2xl font-bold">context menu</h1>

    <div>
        <div class="bg-gray-400 w-64 h-64 flex items-center justify-center">
            <drop-down>
                <template v-slot:trigger>
                    <button>...</button>
                </template>
                <li><a href="#" class="pl-2  leading-loose   pr-8 text-xs block hover:text-gray-600">编辑</a></li>
                <li><a href="#" class="pl-2  leading-loose  pr-8 text-xs block hover:text-gray-600">删除</a></li>
                <li><a href="#" class="pl-2  leading-loose  pr-8 text-xs block hover:text-gray-600">详情</a></li>
            </drop-down>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
