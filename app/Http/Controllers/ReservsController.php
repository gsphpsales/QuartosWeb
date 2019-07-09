<?php

namespace App\Http\Controllers;

use App\Reservs;
use Illuminate\Http\Request;
use App\Rooms;
use Illuminate\Support\Facades\DB;
class ReservsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function availability(Request $request)
    {

        $request->input('adu');
        $request->input('room');
        $request->input('mod');
        $inp = $request->input('inp');
        $out = $request->input('out');
        $id = rooms::all('id');//->count();
        $room = rooms::all('id')->count();
        $id1 = $id['0'];

        //$sql = reservs::all()->where('id', $id1->id);
        //DAYS CURRENT
        $days = strtotime($inp) - strtotime($out);
        $daysf = floor($days / (60 * 60 * 24));
       
          
        
       

        $sql2 = DB::table('reservs')->where('id', $id1->id)->whereBetween('inp', [$inp, $out])->count();
       
        if ($sql2 >= 1) {
            
              $res= 1;
             return view('welcome')->with('res', $res);
        }else{
            echo("arg1");
            exit();
        }

        echo $sql2;
//'SELECT * FROM `reservs` WHERE id = '3' and `inp` AND `out` BETWEEN '2019/07/10' AND '2019/07/28''
       
        exit();
   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Reservs();
        $res->id_room = 1;
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->inp = $request->input('inp');
        $res->out = $request->input('out');
        $res->status = 1;
        $res->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservs  $reservs
     * @return \Illuminate\Http\Response
     */
    public function show(Reservs $reservs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservs  $reservs
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservs $reservs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservs  $reservs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservs $reservs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservs  $reservs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservs $reservs)
    {
        //
    }
}
