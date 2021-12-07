<?php
namespace App\Http\Controllers;
use App\Models\Reportcard;
use DB;
use Session;
use Redirect;
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
        $students  = DB::table('students')->get();
        return view('admin.reportcard.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cards = DB::table('report_cards')
                ->get();
        return view('admin.reportcard.create', compact('cards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if(isset($_POST['submit']))
        {  
            $query = Reportcard::create([
                'first_que'    => $request->first_que,
                'second_que'   => $request->second_que,
                'third_que'    => $request->third_que,
                'four_que'     => $request->four_que,
                'five_que'     => $request->five_que,
                'six_que'      => $request->six_que,
                'seven_que'    => $request->seven_que,
                'eight_que'    => $request->eight_que,
                'nine_que'     => $request->nine_que,
                'nine_que'     => $request->nine_que,
                'ten_que'      => $request->ten_que,
                'eleven_que'   => $request->eleven_que,
                'tweele_que'   => $request->tweele_que,
                'threen_que'   => $request->threen_que,
                'english'      => $request->english,
                'maths'        => $request->maths,
                'hindi'        => $request->hindi,
                'dev_one'      => $request->dev_one,
                'dev_two'      => $request->dev_two,
                'dev_three'    => $request->dev_three,
                'dev_four'     => $request->dev_four
            ]);

            return redirect()->back()->with('success','Report card Added Successfully');

        }else
        {
            redirect::to('admin-login');
        }
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


    public function  viewReportcard(Request $request)
    {
        $studId = $request->studId;
        $userreport_detail  = DB::table('report_first_term')
                ->where('fk_studId',$studId)
                ->get();
       return view('admin.reportcard.grade', compact('userreport_detail'));
    }   
}
