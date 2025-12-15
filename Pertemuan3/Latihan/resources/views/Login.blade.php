{{-- resources/views/auth/login.blade.php --}}
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login</title>
  @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-semibold mb-4">Login</h1>

    @if(session('success'))
      <div class="mb-4 p-3 rounded text-sm text-green-800 bg-green-100">
        {{ session('success') }}
      </div>
    @endif

    @if($errors->any())
      <div class="mb-4 p-3 rounded text-sm text-red-800 bg-red-100">
        Periksa kembali input Anda.
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      {{-- Email --}}
      <label for="email" class="block text-sm font-medium text-gray-700 mt-2">Email</label>
      <input
        id="email"
        name="email"
        type="email"
        value="{{ old('email') }}"
        required
        autofocus
        class="mt-1 block w-full px-3 py-2 border rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('email') border-red-500 @enderror"
      >
      @error('email')
        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
      @enderror

      {{-- Password --}}
      <label for="password" class="block text-sm font-medium text-gray-700 mt-4">Password</label>
      <input
        id="password"
        name="password"
        type="password"
        required
        class="mt-1 block w-full px-3 py-2 border rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('password') border-red-500 @enderror"
      >
      @error('password')
        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
      @enderror

      {{-- Remember --}}
      <div class="flex items-center justify-between mt-4">
        <label class="flex items-center space-x-2 text-sm">
          <input type="checkbox" name="remember" class="h-4 w-4 rounded border-gray-300">
          <span>Remember me</span>
        </label>

       <a href="#" class="text-sm text-indigo-600 hover:underline">
    Forgot password?
</a> 

      </div>

      <button
        type="submit"
        class="mt-6 w-full inline-flex items-center justify-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-md shadow-sm"
      >
        Login
      </button>
    </form>

    <p class="mt-4 text-sm text-gray-600">
      Belum punya akun?
      <a href="#" class="text-indigo-600 hover:underline">Daftar sekarang</a>
    </p>
  </div>
</body>
</html>
