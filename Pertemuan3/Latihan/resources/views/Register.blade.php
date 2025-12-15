{{-- resources/views/auth/register.blade.php --}}
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Register</title>
  @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-semibold mb-4">Register</h1>

    @if($errors->any())
      <div class="mb-4 p-3 rounded text-sm text-red-800 bg-red-100">
        Periksa kembali input Anda.
      </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
      @csrf

      {{-- Name --}}
      <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
      <input
        id="name"
        name="name"
        type="text"
        value="{{ old('name') }}"
        required
        autofocus
        class="mt-1 block w-full px-3 py-2 border rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror"
      >
      @error('name')
        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
      @enderror

      {{-- Email --}}
      <label for="email" class="block text-sm font-medium text-gray-700 mt-4">Email</label>
      <input
        id="email"
        name="email"
        type="email"
        value="{{ old('email') }}"
        required
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

      {{-- Password Confirmation --}}
      <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mt-4">Konfirmasi Password</label>
      <input
        id="password_confirmation"
        name="password_confirmation"
        type="password"
        required
        class="mt-1 block w-full px-3 py-2 border rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
      >

      <button
        type="submit"
        class="mt-6 w-full inline-flex items-center justify-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-md shadow-sm"
      >
        Register
      </button>
    </form>

    <p class="mt-4 text-sm text-gray-600">
      Sudah punya akun?
      <a href="#" class="text-indigo-600 hover:underline">Login</a>
    </p>
  </div>
</body>
</html>
