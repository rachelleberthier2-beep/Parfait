<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Nom :</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br>

        <label>Email :</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br>

        <label>Mot de passe :</label>
        <input type="password" name="password" required>
        <br>

        <label>Confirmer mot de passe :</label>
        <input type="password" name="password_confirmation" required>
        <br>

        <button type="submit">S'inscrire</button>
    </form>

    <p>Tu as déjà un compte ? <a href="{{ route('login.form') }}">Connecte-toi ici</a></p>
</body>
</html>
