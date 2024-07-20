<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>

<section class="h-screen w-screen flex justify-center items-center">
    <div class="h-[80%] w-[40%] border-2 border-black rounded-2xl bg-primary">
        <form action="{{ route('login.form') }}" method="post" class='h-full flex flex-col items-center justify-between p-10'>
            @csrf
            <h1 class="text-4xl mb-5"><b>Log In</b></h1>
            <div class="h-full w-full px-5 flex flex-col justify-center items-center">
                @if($errors->any())
                    <div class="w-full mb-4 text-red-600">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <label for="email"><b>Email</b></label>
                <input class='w-full  text-xl px-2 py-1.5 border-2 border-black rounded-xl'
                       type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>

                <label for="password" class="mt-5"><b>Password</b></label>
                <input class='w-full text-xl px-2 py-1.5 border-2 border-black rounded-xl'
                       type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" class="w-full py-1.5 text-xl rounded-xl border-black border-2 mt-5 bg-btn2 hover:bg-btn hover:transition">Login</button>
                <label class="w-full px-3">
                    <input type="checkbox" name="remember" > Remember me
                </label>
            </div>
            <small class="text-sm">Not Registered?
                <a href="/register" class="text-blue-500 hover:underline">Register Now</a>
            </small>
        </form>
    </div>
</section>
</body>
</html>
