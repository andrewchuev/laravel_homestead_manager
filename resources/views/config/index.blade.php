@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-end">
        <a class="btn btn-success" href="{{ route('config.create') }}"><i class="bi bi-plus-square"></i> Добавить</a>
    </div>


    <table class="table table-striped">
        <thead class="table-dark">
        <tr>
            <th>Sites Map</th>
            <th>Folder Map</th>
            <th>Folders To</th>

            <th>Sites To</th>
            <th>PHP Version</th>
            <th>Database Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sites as $key => $site)
            <tr>
                <td>{{ $site['map'] }}</td>
                <td>{{ $config['folders'][$key]['map'] ?? '' }}</td>
                <td>{{ $config['folders'][$key]['to'] ?? '' }}</td>

                <td>{{ $site['to'] }}</td>
                <td>{{ $site['php'] }}</td>
                <td>{{ $config['databases'][$key] ?? '' }}</td>

                <td>

                    <div class="d-flex justify-content-between">
                        <form action="{{ route('config.destroy', $key) }}" method="post" class="me-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                        </form>
                        <a class="btn btn-primary" href="{{ route('config.edit', $key) }}"><i class="bi bi-pencil"></i></a>
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
