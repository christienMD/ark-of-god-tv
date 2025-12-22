<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::active()
            ->orderBy('name')
            ->paginate(6);

        return view('Branches.index', compact('branches'));
    }

    public function show(string $slug)
    {
        $branch = Branch::active()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('Branches.show', compact('branch'));
    }
}
