@extends('layouts.app')
@section('content')
    <form action="{{ route('config.update', $key) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="folderMap" class="form-label">Folder Map:</label>
            <input id="folderMap" class="form-control" type="text" name="folderMap" value="{{ $folder['map'] }}">
        </div>


        <div class="mb-3">
            <label for="foldersTo" class="form-label">Folders To:</label>
            <input id="foldersTo" class="form-control" type="text" name="foldersTo" value="{{ $folder['to'] }}">
        </div>
        <div class="mb-3">
            <label for="sitesMap" class="form-label">Sites Map:</label>
            <input id="sitesMap" class="form-control" type="text" name="sitesMap" value="{{ $site['map'] }}">
        </div>
        <div class="mb-3">
            <label for="sitesTo" class="form-label">Sites To:</label>
            <input id="sitesTo" class="form-control" type="text" name="sitesTo" value="{{ $site['to'] }}">
        </div>
        <div class="mb-3">
            <label for="phpVersion" class="form-label">PHP Version:</label>
            <select name="phpVersion" id="phpVersion" class="form-control">
                <?php
                $versions = [ '7.4', '8.1', '8.2' ];
                foreach ( $versions as $v ) {
                    $selected = $site['php'] === $v ? 'selected' : '';
                    ?>
                <option <?= $selected ?> value="<?= $v ?>"><?= $v ?></option>
                    <?php
                }
                ?>
            </select>

        </div>
        <div class="mb-3">
            <label for="dbName" class="form-label">Database Name:</label>
            <input id="dbName" class="form-control" type="text" name="dbName" value="{{ $database }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Update Site</button>
        </div>
    </form>
@endsection
