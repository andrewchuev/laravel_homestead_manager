<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Site</title>
</head>
<body>
<form action="{{ route('config.update', $key) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label>Folder Map:</label>
        <input type="text" name="folderMap" value="{{ $folder['map'] }}">
    </div>
    <div>
        <label>Folders To:</label>
        <input type="text" name="foldersTo" value="{{ $folder['to'] }}">
    </div>
    <div>
        <label>Sites Map:</label>
        <input type="text" name="sitesMap" value="{{ $site['map'] }}">
    </div>
    <div>
        <label>Sites To:</label>
        <input type="text" name="sitesTo" value="{{ $site['to'] }}">
    </div>
    <div>
        <label>PHP Version:</label>
        <input type="text" name="phpVersion" value="{{ $site['php'] }}">
    </div>
    <div>
        <label>Database Name:</label>
        <input type="text" name="dbName" value="{{ $database }}">
    </div>
    <div>
        <button type="submit">Update Site</button>
    </div>
</form>
</body>
</html>
