<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background: #DDE9FC;
        }

        .login-container{
            width:100%;
            max-width:480px;
            padding:3px;
            border-radius: 22px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            animation: animateBorder 2s linear infinite;
        }

        .login-card{
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(15px);
            border:1px solid rgba(255,255,255,0.2);
            border-radius:22px;
            padding:40px 35px;
            box-shadow:0 10px 35px rgba(0,0,0,0.2);
            color:#fff;
        }

        .logo{
            text-align:center;
            margin-bottom:10px;
        }

        .logo h1{
            font-size:34px;
            font-weight:700;
        }

        .subtitle{
            text-align:center;
            margin-bottom:30px;
            color:#e5e7eb;
            font-size:14px;
        }

        .form-group{
            margin-bottom:18px;
        }

        .form-group label{
            display:block;
            margin-bottom:8px;
            font-size:14px;
            font-weight:500;
        }

        .input-box{
            position:relative;
        }

        .input-box i{
            position:absolute;
            left:15px;
            top:50%;
            transform:translateY(-50%);
            color:#d1d5db;
        }

        .input-box input{
            width:100%;
            padding:14px 14px 14px 45px;
            border:none;
            outline:none;
            border-radius:12px;
            background:rgba(255,255,255,0.15);
            color:#fff;
            font-size:14px;
            transition:0.3s;
        }

        .input-box input::placeholder{
            color:#d1d5db;
        }

        .input-box input:focus{
            background:rgba(255,255,255,0.22);
            border:1px solid #fff;
        }

        .options{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:20px;
            font-size:13px;
        }

        .options a{
            color:#fff;
            text-decoration:none;
        }

        .options a:hover{
            text-decoration:underline;
        }

        .login-btn{
            width:100%;
            padding:14px;
            border:none;
            border-radius:12px;
            background:#fff;
            color:#4f46e5;
            font-size:16px;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        .login-btn:hover{
            transform:translateY(-2px);
            background:#f3f4f6;
        }

        .register-link{
            text-align:center;
            margin-top:20px;
            font-size:14px;
            color:#e5e7eb;
        }

        .register-link a{
            color:#fff;
            font-weight:600;
            text-decoration:none;
        }

        .register-link a:hover{
            text-decoration:underline;
        }

        @media(max-width:480px){
            .login-card{
                padding:30px 25px;
            }
        }
    </style>
</head>
<body>

<div class="login-container">

    <div class="login-card">

        <div class="logo">
            <h1>Laravel</h1>
        </div>

        <p class="subtitle">
            Welcome back! Login to your account
        </p>

        @if ($errors->any())
            <div style="background:#fee2e2;color:#7f1d1d;padding:10px;border-radius:8px;margin-bottom:16px;">
                <ul style="margin:0;padding-left:18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf

            <div class="form-group">
                <label>Email Address</label>

                <div class="input-box">
                    <i class="fa-solid fa-envelope"></i>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                    >
                </div>
            </div>

            <div class="form-group">
                <label>Password</label>

                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter password"
                        required
                    >
                </div>
            </div>

            <div class="options">
                <label>
                    <input type="checkbox" name="remember">
                    Remember me
                </label>

                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="login-btn">
                Login
            </button>

            <div class="register-link">
                Don't have an account?
                <a href="{{ route('admin.register') }}">
                    Register Now
                </a>
            </div>

        </form>

    </div>

</div>

</body>
</html>