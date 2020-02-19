<?php

namespace App\Http\Controllers;

use App\Owl;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class OwlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('owls.index', [
            'owls' => $this->getOwls(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'name' => ['required'],
            'version' => ['required'],
            'resit' => ['required'],
            'comment' => ['required'],
        ]);
        $owl = new Owl();

        $owl->name = request('name');
        $owl->version_nr = request('version');
        $owl->is_resit = request('resit');
        $owl->comments = request('comment');

        $owl->save();

        return redirect('/owls');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Owl $owl
     * @return \Illuminate\Http\Response
     */
    public function show(Owl $owl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Owl $owl
     * @return \Illuminate\Http\Response
     */
    public function edit(Owl $owl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Owl $owl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owl $owl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Owl $owl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owl $owl)
    {
        //
    }

    /**
     *@return array of Owls
     */
    public function getOwls(): array
    {
        $owls = Owl::all();

        $result = [];

        foreach ($owls as $owl)
        {
            $result[] = $owl;
        }

        return $result;
    }
}
