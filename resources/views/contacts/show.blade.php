<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Détails du Contact</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Nom:</strong> {{ $contact->nom }}</p>
                <p><strong>Téléphone:</strong> {{ $contact->telephone }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Retour à la liste des contacts</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
