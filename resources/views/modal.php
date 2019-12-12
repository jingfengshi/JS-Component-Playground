<!doctype html>
<html lang="en" xmlns:v-slot="http://www.w3.org/1999/XSL/Transform">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Modal</title>
    <style>
        body{
            font-family: sans-serif;
        }
    </style>
</head>
<body class="p-10">
<div id="app" class="text-center">
    <h1 class="text-2xl font-bold mb-8">Modal</h1>
    <p>
        <a href="#cancel-modal">Open Modal</a>
    </p>

    <modal name="cancel-modal">
        <h1 class="font-bold text-xl mb-2">Leaving So Soon?</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, blanditiis culpa cupiditate illo ipsum necessitatibus nesciunt quaerat quis ratione repellendus sed sunt tenetur. A error iste libero neque officia unde.
        </p>

        <template v-slot:footer>
            <button @click="$modal.hide('cancel-modal')"  class="bg-blue-500 py-2 px-4 rounded-lg text-white hover:bg-blue-600 mr-2">Cancel</button>
            <a href="#" class="bg-blue-500 py-2 px-4 rounded-lg text-white hover:bg-blue-600">Continue</a>
        </template>
    </modal>
</div>

<script src="/js/app.js"></script>
</body>
</html>
