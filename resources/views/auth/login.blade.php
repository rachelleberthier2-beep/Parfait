<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email :</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br>

        <label>Mot de passe :</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Se connecter</button>
    </form>

    <p>Pas encore inscrit ? <a href="{{ route('register.form') }}">Inscris-toi ici</a></p>
</body>
</html>
