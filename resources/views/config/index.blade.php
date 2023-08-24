<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homestead Sites</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th>Folder Map</th>
        <th>Folders To</th>
        <th>Sites Map</th>
        <th>Sites To</th>
        <th>PHP Version</th>
        <th>Database Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sites as $key => $site)
        <tr>
            <td>{{ $config['folders'][$key]['map'] ?? '' }}</td>
            <td>{{ $config['folders'][$key]['to'] ?? '' }}</td>
            <td>{{ $site['map'] }}</td>
            <td>{{ $site['to'] }}</td>
            <td>{{ $site['php'] }}</td>
            <td>{{ $config['databases'][$key] ?? '' }}</td>
            <td>
                <form action="{{ route('config.destroy', $key) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('config.create') }}">Добавить</a>
</body>
</html>
