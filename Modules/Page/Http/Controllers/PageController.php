<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use \App\Models\Page;
use DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('page::index');
    }
    public function dataList(Request $req)
    {
        $users = Page::select('*');
        return datatables()->of($users)
            ->addIndexColumn()
            ->escapeColumns([])
            ->filter(function ($query) use ($req) {
                if ($req->has('name')) {
                    $query->where('name', 'like', "%{$req->get('name')}%");
                }

                // if ($req->has('email')) {
                //     $query->where('email', 'like', "%{$req->get('email')}%");
                // }
            })
            // ->editColumn('status', function ($data) {
            //     if ($data->status == 1) {
            //         return '<span class="badge badge-success">Active</span>';
            //     } else {
            //         return '<span class="badge badge-danger">Suspend</span>';
            //     }
            // })
            ->addColumn('action', function ($data) {
                return '<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('page::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        DB::transaction(function () {
            //
        });
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('page::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('page::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
