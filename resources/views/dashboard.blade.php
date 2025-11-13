<!DOCTYPE html>
<html>
<head>
    <title>Tableau de bord</title>
</head>
<body>
    <h1>Bienvenue, {{ auth()->user()->name }}</h1>

     <nav>
        <ul>
            <li><a href="{{ url('/blog/create') }}">Ajouter un article</a></li>
            <li><a href="{{ url('/realisation/create') }}">Ajouter une réalisation</a></li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Se déconnecter</button>
    </form>
</body>
</html>
