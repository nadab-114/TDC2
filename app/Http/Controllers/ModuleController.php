<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\ModuleContent;
use Illuminate\Http\Request;
class ModuleController extends Controller
{

    public function usermoduleindex() {
        $module = Module::all();
        return view('usermodule.index', compact('module'));
    }
    public function show($id) {
        $module = Module::findOrFail($id);
        $filePath = storage_path('app/public/' . $module->file_path);
    
        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }
    
        return response()->file($filePath);
    }
}
