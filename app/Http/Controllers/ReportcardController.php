<?php
namespace App\Http\Controllers;
use App\Models\Reportcard;
use Illuminate\Http\Request;

class ReportcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reportcard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reportcard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reportcard  $reportcard
     * @return \Illuminate\Http\Response
     */
    public function show(Reportcard $reportcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reportcard  $reportcard
     * @return \Illuminate\Http\Response
     */
    public function edit(Reportcard $reportcard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reportcard  $reportcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reportcard $reportcard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reportcard  $reportcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reportcard $reportcard)
    {
        //
    }
}
