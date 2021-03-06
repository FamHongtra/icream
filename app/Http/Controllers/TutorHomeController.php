<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Datatables;

class TutorHomeController extends BaseController
{
    public function __construct(){
        
    }
    public function index(){
        //Get data from database
        $subject = DB::table('subject')->orderBy('subject_name','asc')->get();
        $day = DB::table('day')->orderBy('dayfull','asc')->get();
        $level = DB::table('levels')->orderBy('level_name','asc')->get();
        $duration = DB::table('duration')->orderBy('duration_name','asc')->get();

        $learnerSchedule = DB::table('learner_schedule')
        ->select(['subject_name', 'dayfull', 'level_name', 'duration_name'])
        ->join('subject','learner_schedule.subjects_id','=','subject.subjects_id')
        ->join('levels','learner_schedule.levels_id','=','levels.levels_id')
        ->join('day','learner_schedule.day_id','=','day.day_id')
        ->join('duration','learner_schedule.duration_id','=','duration.duration_id')
        ->paginate(10);
      

        //Set data to view
        $data = compact('subject','day','level','duration','learnerSchedule');
     

        return view('tutor.TutorHome',$data);
    }
    public function showSchedule(){
        $learnerSchedule = DB::table('learner_schedule')
        ->select(['subject_name', 'dayfull', 'level_name', 'duration_name'])
        ->join('subject','learner_schedule.subjects_id','=','subject.subjects_id')
        ->join('levels','learner_schedule.levels_id','=','levels.levels_id')
        ->join('day','learner_schedule.day_id','=','day.day_id')
        ->join('duration','learner_schedule.duration_id','=','duration.duration_id')
        ->get() ;
        $showData = json_encode($learnerSchedule);
        $showData = compact('showData');
        return view('tutor.TutorHome',$showData);
       //return Datatables::of($learnerSchedule)->make();
    }
}
