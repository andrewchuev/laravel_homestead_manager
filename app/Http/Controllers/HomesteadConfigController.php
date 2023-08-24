<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Yaml\Yaml;

class HomesteadConfigController extends Controller
{
    private $configPath;

    public function __construct()
    {
        $this->configPath = base_path(getenv('HOMESTEAD_YAML_PATH'));
    }

    public function index()
    {
        $config = Yaml::parseFile($this->configPath);
        $sites = $config['sites'] ?? [];
        return view('config.index', ['sites' => $sites, 'config' => $config]);
    }

    public function create()
    {
        return view('config.create');
    }

    public function store(Request $request)
    {
        $config = Yaml::parseFile($this->configPath);

        // Добавляем данные в блок folders
        $config['folders'][] = [
            'map' => $request->input('folderMap'),
            'to' => $request->input('foldersTo')
        ];

        // Добавляем данные в блок sites
        $config['sites'][] = [
            'map' => $request->input('sitesMap'),
            'to' => $request->input('sitesTo'),
            'php' => $request->input('phpVersion')
        ];

        // Добавляем данные в блок databases
        $config['databases'][] = $request->input('dbName');

        file_put_contents($this->configPath, Yaml::dump($config, 4,2));

        return redirect()->route('config.index')->with('success', 'Site added successfully!');
    }

    public function edit($key)
    {
        $config = Yaml::parseFile($this->configPath);
        $site = $config['sites'][$key] ?? null;
        $folder = $config['folders'][$key] ?? null;
        $database = $config['databases'][$key] ?? null;

        if (!$site || !$folder || !$database) {
            return redirect()->route('config.index')->with('error', 'Site not found!');
        }

        return view('config.edit', [
            'key' => $key,
            'site' => $site,
            'folder' => $folder,
            'database' => $database
        ]);
    }

    public function update(Request $request, $key)
    {
        $config = Yaml::parseFile($this->configPath);

        // Обновляем данные
        $config['folders'][$key] = [
            'map' => $request->input('folderMap'),
            'to' => $request->input('foldersTo')
        ];

        $config['sites'][$key] = [
            'map' => $request->input('sitesMap'),
            'to' => $request->input('sitesTo'),
            'php' => $request->input('phpVersion')
        ];

        $config['databases'][$key] = $request->input('dbName');

        file_put_contents($this->configPath, Yaml::dump($config, 4, 2));

        return redirect()->route('config.index')->with('success', 'Site updated successfully!');
    }

    public function destroy($key)
    {
        $config = Yaml::parseFile($this->configPath);

        // Удаляем записи
        unset($config['folders'][$key]);
        unset($config['sites'][$key]);
        unset($config['databases'][$key]);

        // Переиндексация массивов
        $config['folders'] = array_values($config['folders']);
        $config['sites'] = array_values($config['sites']);
        $config['databases'] = array_values($config['databases']);

        // Сохраняем обновленный файл
        file_put_contents($this->configPath, Yaml::dump($config, 4,2));

        return redirect()->route('config.index')->with('success', 'Site removed successfully!');
    }
}
