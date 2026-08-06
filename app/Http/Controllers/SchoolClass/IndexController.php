<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = "Sistem Sekolah - guruku hebat";
        $classes = [
        [
            'id' => 1,
            'name' => 'XII AKL 1',
            'grade' => 'XII',
            'major' => 'AKL',
            'homeroom_class' => 'Budi Santoso'
        ],
        [
            'id' => 2,
            'name' => 'XII TKJ 1',
            'grade' => 'XII',
            'major' => 'TKJ',
            'homeroom_class' => 'Siti Aminah'
        ]

        ];
        return view('classes.index', [
            'title' => $title,
            'classes' => $classes
        ] );
    }
}
