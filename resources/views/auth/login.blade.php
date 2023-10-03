<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
</head>

<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="flex flex-col">
            <label for="email" class="block text-sm font-medium ">Email</label>
            <div class="mt-1">
                <input type="email" name="email" id="email" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com">
            </div>
            
            <div class="flex flex-col mt-4">
                <label for="password" class="block text-sm font-medium ">Senha</label>
                <input name="password" id="password" type="password" placeholder="Sua senha" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
            </div>

            <button type="submit" class="text-white mt-4 flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium  shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Entrar
            </button>
        </div>
    </form>
</body>

</html>