<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UPT PPA Admin Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "riau-green": "#006D5B",
                        "accent-gold": "#D4AF37",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "Inter", "sans-serif"],
                        "body": ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 font-body min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-100">
        <div class="p-8">
            <div class="flex justify-center flex-col items-center mb-8">
                <img src="https://bkd.riau.go.id/wp-content/uploads/2019/09/cropped-provinsi-riau-vector-logo.png" alt="Logo Riau" class="w-16 h-auto mb-4">
                <h1 class="text-2xl font-bold font-display text-slate-900">UPT PPA</h1>
                <p class="text-slate-600 text-xs font-medium mt-1 tracking-wide uppercase text-center">Unit Pelayanan Teknis Pelindungan Perempuan dan Anak</p>
            </div>

            @if ($errors->any())
                <div class="mb-6 bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-lg text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 text-[20px]">mail</span>
                        </div>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                            class="block w-full pl-10 pr-3 py-2.5 border border-slate-200 rounded-lg focus:ring-2 focus:ring-riau-green focus:border-riau-green sm:text-sm text-slate-900 placeholder-slate-400 bg-slate-50 focus:bg-white transition-colors">
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 text-[20px]">lock</span>
                        </div>
                        <input type="password" name="password" id="password" required
                            class="block w-full pl-10 pr-10 py-2.5 border border-slate-200 rounded-lg focus:ring-2 focus:ring-riau-green focus:border-riau-green sm:text-sm text-slate-900 placeholder-slate-400 bg-slate-50 focus:bg-white transition-colors">
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none">
                            <span class="material-symbols-outlined text-[20px]" id="eye-icon">visibility_off</span>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-riau-green focus:ring-riau-green border-slate-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-slate-600">Remember me</label>
                    </div>
                </div>

                <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-riau-green hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-riau-green transition-colors">
                    Log in
                </button>
            </form>
        </div>
        <div class="px-8 py-4 bg-slate-50 border-t border-slate-100 flex justify-center">
            <a href="/" class="text-sm text-slate-500 hover:text-riau-green flex items-center gap-1 transition-colors">
                <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                Kembali ke Beranda
            </a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.textContent = 'visibility';
            } else {
                passwordInput.type = 'password';
                eyeIcon.textContent = 'visibility_off';
            }
        }
    </script>
</body>
</html>
