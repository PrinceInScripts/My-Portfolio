<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Admin Login | scriptxprince</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            background: #0d0d0d;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 16px;
            padding: 48px 40px;
            width: 100%;
            max-width: 400px;
        }
        .logo {
            text-align: center;
            font-size: 22px;
            font-weight: 900;
            font-family: monospace;
            letter-spacing: 1px;
            margin-bottom: 32px;
        }
        .logo span { color: #d20120; }
        h2 { font-size: 20px; margin-bottom: 24px; color: #ccc; font-weight: 400; }
        .form-group { margin-bottom: 20px; }
        label { display: block; font-size: 13px; color: #aaa; margin-bottom: 8px; }
        input {
            width: 100%;
            background: #111;
            border: 1px solid #333;
            border-radius: 8px;
            padding: 12px 16px;
            color: #fff;
            font-size: 15px;
            outline: none;
            transition: border-color 0.2s;
        }
        input:focus { border-color: #d20120; }
        .btn {
            width: 100%;
            background: #d20120;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 14px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            letter-spacing: 1px;
            transition: background 0.2s;
            margin-top: 8px;
        }
        .btn:hover { background: #a8001a; }
        .error {
            background: rgba(210,1,32,0.15);
            border: 1px solid #d20120;
            border-radius: 8px;
            padding: 12px 16px;
            color: #ff6b6b;
            font-size: 14px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="logo">&lt;<span>scriptxprince</span>/&gt;</div>
        <h2>Admin Panel Login</h2>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="admin" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn">LOGIN →</button>
        </form>
    </div>
</body>
</html>
