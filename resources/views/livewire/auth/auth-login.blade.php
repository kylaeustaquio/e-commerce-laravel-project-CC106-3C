<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ url('CSS/login.css') }}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <style>
        body {
            background: url('{{ asset('login2.jpg') }}') no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
        }
    </style>

    <div> 
        <div class="wrapper"> 
            <form wire:submit.prevent="login">
                <h1>Login</h1>

                @if (session()->has('error'))
                    <div style="color: red;">{{ session('error') }}</div>
                @endif

                <div class="input-box">
                    <input type="email" wire:model="email" placeholder="Email" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" wire:model="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="{{ route('signup') }}" class="btn btn-primary">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

