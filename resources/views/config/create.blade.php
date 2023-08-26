@extends('layouts.app')
@section('content')
    <div class="row mt-4">
        <div class="col">
            <form action="{{ route('config.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="sitesMap" class="form-label">Sites Map:</label>
                    <input id="sitesMap" class="form-control" type="text" name="sitesMap" value="test_01.local">
                </div>
                <div class="mb-3">
                    <label for="folderMap" class="form-label">Folder Map:</label>
                    <input id="folderMap" class="form-control" type="text" name="folderMap" value="D:\Projects\Learning\Laravel\test_01.local">
                </div>
                <div class="mb-3">
                    <label for="foldersTo" class="form-label">Folders To:</label>
                    <input id="foldersTo" class="form-control" type="text" name="foldersTo" value="/home/vagrant/projects/learning/laravel/test_01.local">
                </div>

                <div class="mb-3">
                    <label for="sitesTo" class="form-label">Sites To:</label>
                    <input id="sitesTo" class="form-control" type="text" name="sitesTo" value="/home/vagrant/projects/learning/laravel/test_01.local/public">
                </div>
                <div class="mb-3">
                    <label for="phpVersion" class="form-label">PHP Version:</label>
                    <select name="phpVersion" id="phpVersion" class="form-control">
                        <?php
                        $versions = [ '8.2', '8.1', '7.4' ];
                        foreach ( $versions as $v ) {
                            ?>
                        <option value="<?= $v ?>"><?= $v ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="dbName" class="form-label">Database Name:</label>
                    <input id="dbName" class="form-control" type="text" name="dbName" value="test_01">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Add Site</button>
                </div>
            </form>

        </div>
    </div>
@endsection
