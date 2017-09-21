<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Input;
use Illuminate\Http\Request;

class CreateCourseLearner extends BaseController
{
   
    public function __construct(){
        
    }

    public function index(){
      
        $subject = DB::table('subject')->orderBy('subject_name','asc')->get();
        $day = DB::table('day')->orderBy('dayfull','asc')->get();
        $level = DB::table('levels')->orderBy('level_name','asc')->get();
        $duration = DB::table('duration')->orderBy('duration_name','asc')->get();
  
        $data = compact('subject','day','level','duration');

        return view('learner.LearnerCreateCourse',$data);
    
    }
    public function insert(Request $insert){
        
        //$tutor_schedule = new TutorSchedule();
        $learner_schedule = DB::table('learner_schedule')->get();
                
                $learner_schedule->learner_id = 1 ;
                $learner_schedule->status_sch_id = 1 ;
                $subject = DB::table('subject')->get();
                $day = DB::table('day')->get();
                $level = DB::table('levels')->get();
                $duration = DB::table('duration')->get();
        
               
                $learner_schedule->day_id = $insert->input('day');
                $learner_schedule->subjects_id = $insert->input('subject');
                $learner_schedule->levels_id = $insert->input('levels');
                $learner_schedule->duration_id = $insert->input('duration');
                $learner_schedule->save() ;

                $data = compact('subject','day','level','duration');
                return view('learner.LearnerCreateCourse',$data);
      
      }
}
