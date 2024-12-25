<!-- resources/views/etudiants/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un étudiant</title>
</head>
<body>
    <h1>Formulaire de création d'un étudiant</h1>
    <form action="{{ route('etudiants.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required><br>

        <label for="cin">CIN:</label>
        <input type="text" name="cin" id="cin" required><br>

        <label for="cne">CNE:</label>
        <input type="text" name="cne" id="cne" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="rapport">Rapport (PDF seulement):</label>
        <input type="file" name="rapport" id="rapport" required><br>

        <button type="submit">Créer l'étudiant</button>
    </form>
</body>
</html>
