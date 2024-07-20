<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>
<body>
<section class="h-screen w-screen flex justify-center items-center">
    <div class="h-[80%] w-[40%] border-2 border-black rounded-2xl bg-primary">
        <form action="/register" method="post" class='h-full w-full flex flex-col items-center justify-between p-10'>
            @csrf
            <h1 class="text-4xl mb-5"><b>Registration Form</b></h1>
            <div class="h-full w-full px-5 flex flex-col justify-center items-center">
                <div class="w-full">
                    <label for="firstName"><b>First Name</b></label>
                    <input class='w-full  text-xl px-2 py-1.5 border-2 border-black rounded-xl'
                           type="text" placeholder="First Name" name="firstName" required value="{{ old('firstName')  }}">
                </div>

                <div class="w-full">
                    <label for="lastName"><b>Last Name</b></label>
                    <input class='w-full  text-xl px-2 py-1.5 border-2 border-black rounded-xl @error('lastName') border-red-500 @enderror'
                           type="text" placeholder="Last Name" name="lastName" required value="{{ old('lastName')  }}">
                    @error('firstName')
                        {{ $message }}
                    @enderror
                </div>

                <div class="w-full">
                    <label for="email"><b>Email</b></label>
                    <input class='w-full  text-xl px-2 py-1.5 border-2 border-black rounded-xl'
                           type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="w-full">
                    <label for="password" class="mt-5"><b>Password</b></label>
                    <input class='w-full text-xl px-2 py-1.5 border-2 border-black rounded-xl'
                           type="password" placeholder="min. 8 character (min. 1 uppercase and lowercase)" name="password" required>
                </div>

                <button type="submit" class="w-full py-1.5 text-xl rounded-xl border-black border-2 mt-5 bg-btn2 hover:bg-btn hover:transition">Register</button>

            </div>
            <small class="text-sm">Already have an account?
                <a href="/login" class="text-blue-500 hover:underline">Log In</a>
            </small>
        </form>
    </div>
</section>
</body>
</html>
