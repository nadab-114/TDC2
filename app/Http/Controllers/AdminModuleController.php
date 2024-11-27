<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\ModuleContent;
use Illuminate\Http\Request;

class AdminModuleController extends Controller
{

    public function moduleindex()
    {
        $modules = Module::all();
        
        return view('admin.modules.module', compact('modules'));
    }

    public function createmodule() {
        return view('admin.modules.createmodule');
    }

    public function show($id)
    {
        $module = Module::findOrFail($id);

        // Return a view to display the module details (if needed).
        // This can include a preview of the PDF or details about the module.
        return view('admin.modules.show', compact('module'));
    }
    
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|mimes:pdf|max:10240', // Validate PDF
        ]);
    
        $path = $request->file('file')->store('modules', 'public');
    
        Module::create([
            'title' => $request->title,
            'file_path' => $path,
        ]);
    
        return redirect()->back()->with('success', 'Module uploaded successfully!');
    } 

    public function edit($id) {
        $module = Module::findOrFail($id);
        return view('admin.modules.edit', compact('module'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

    $module = Module::findOrFail($id);
        if ($request->hasFile('file')) {
            $request->validate(['file' => 'mimes:pdf|max:2048']);
            $path = $request->file('file')->store('modules', 'public');
            $module->file_path = $path;
        }

        $module->update(['title' => $request->title]);
        return redirect()->route('admin.modules.module')->with('success', 'Module updated successfully!');
    
    }
    public function destroy($id) {
        $module = Module::findOrFail($id);
        unlink(storage_path('app/public/' . $module->file_path)); // Delete the file
        $module->delete();
        return redirect()->route('admin.modules.module')->with('success', 'Module deleted successfully!');
    }

}


