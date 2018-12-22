<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\JobDetails;

class JobsController extends Controller
{

        public function getAllJobs()
        {


                $all = Jobs::all();


                return response()->json($all);

        }

        public function getIndividualJobs($id)
        {


                $getJob = Jobs::find($id);
                return response()->json($getJob);

        }

        public function getJobDetails($id)
        {


                $jobdetails = JobDetails::where('job_id', $id)->get();
                //  $jobdata = json_encode(array_merge(json_decode($getJob, true),json_decode($jobdetails, true)));
                return response()->json($jobdetails);

        }

        public function getJobByCategory($category)
        {




                    //return $category;
                $jobs = Jobs::where('job_category', $category)->get();

                return response()->json($jobs);
        }


        public function getJobBySearch($location, $experience, $jobtype)
        {




                $jobs = Jobs::select('id','job_title', 'job_company', 'job_profile', 'job_experience', 'job_salary', 'job_location')
                        ->where('job_location', $location)
                        ->where('job_experience', $experience)
                        ->where('job_type', $jobtype)
                        ->get();


                return response()->json($jobs);


        }


}

