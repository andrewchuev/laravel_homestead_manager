<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Site</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<form action="{{ route('config.store') }}" method="post">
    @csrf
    <div>
        <label>Folder Map:</label>
        <input type="text" name="folderMap">
    </div>
    <div>
        <label>Folders To:</label>
        <input type="text" name="foldersTo">
    </div>
    <div>
        <label>Sites Map:</label>
        <input type="text" name="sitesMap">
    </div>
    <div>
        <label>Sites To:</label>
        <input type="text" name="sitesTo">
    </div>
    <div>
        <label>PHP Version:</label>
        <input type="text" name="phpVersion">
    </div>
    <div>
        <label>Database Name:</label>
        <input type="text" name="dbName">
    </div>
    <div>
        <button type="submit">Add Site</button>
    </div>
</form>
</body>
</html>
