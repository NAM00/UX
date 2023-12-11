<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use DB;


class TaskController extends Controller
{

    public function index(Request $request)
    {
        $request->session()->flush();

        $workerId = $request->workerId;
        $type = 1;
        $test = $request->session()->put('worker_id', $workerId);
        $worker = session('worker_id');

        if(Task::where('worker_id', $workerId)->first())
        {

        }
        else
        {


            if(Task::count() != null)
            {
                $row_count = Task::count();
                if($row_count > 0 AND $row_count <= 6 )
                {
                    $type = 1;
                }
                elseif($row_count > 6 AND $row_count <= 12 )
                {
                    $type = 2;
                }
                elseif($row_count > 12 AND $row_count <= 18 )
                {
                    $type = 3;
                }
                elseif($row_count > 18 AND $row_count <= 24 )
                {
                    $type = 4;
                }
                elseif($row_count > 24 AND $row_count <= 30 )
                {
                    $type = 5;
                }
                else
                {
                    $type = 1;
                }

                Session::put('type', $type);

            }
            else
            {

            }


            return view('Task_Desc')->with(["type"=>$type , "workerId"=>$workerId ]);


        }




    }


    public function create()
    {
        //
    }


    public function store_mainTask1(Request $request)
    {
        $worker = session('worker_id');

        $session_id = session()->getId();
        $subTask11 = $request->post("subTask11");
        $subTask12 = $request->post("subTask12");
        if($request->post("subTask13") !== null)
        {
            $subTask13 = $request->post("subTask13");
        }
        else
        {
            $subTask13 = null;
        }


        $type_id=1;





        if(Task::where('session_id', $session_id)->first())
        {
            $data = Task::where('session_id', $session_id)->first();
            $data->sub_task_11 = $subTask11;
            $data->sub_task_12 = $subTask12;
            $data->sub_task_13 = $subTask13;
            $data->update();
        }
        else
        {
            $data = new Task();
            $data->sub_task_11 = $subTask11;
            $data->sub_task_12 = $subTask12;
            $data->sub_task_13 = $subTask13;
            $data->session_id = $session_id;
            $data->worker_id = $worker;
            $data->type_id = $type_id;
            $data->save();

        }

        return view('mainTask2');
    }

    public function store_mainTask2(Request $request)
    {
        $session_id = session()->getId();
        $subTask21 = $request->post("subTask21");
        $subTask22 = $request->post("subTask22");
        if($request->post("subTask23") !== null)
        {
            $subTask23 = $request->post("subTask23");
        }
        else
        {
            $subTask23 = null;
        }

        $data = Task::where('session_id', $session_id)->first();
        $data->sub_task_21 = $subTask21;
        $data->sub_task_22 = $subTask22;
        $data->sub_task_23 = $subTask23;
        $data->update();
        return view('mainTask3');
    }

    public function store_mainTask3(Request $request)
    {
        $session_id = session()->getId();
        $subTask31 = $request->post("subTask31");
        $subTask32 = $request->post("subTask32");
        if($request->post("subTask33") !== null)
        {
            $subTask33 = $request->post("subTask33");
        }
        else
        {
            $subTask33 = null;
        }

        $data = Task::where('session_id', $session_id)->first();
        $data->sub_task_31 = $subTask31;
        $data->sub_task_32 = $subTask32;
        $data->sub_task_33 = $subTask33;
        $data->update();
        return view('mainTask4');
    }

    public function store_mainTask4(Request $request)
    {
        $session_id = session()->getId();
        $subTask41 = $request->post("subTask41");
        $subTask42 = $request->post("subTask42");
        if($request->post("subTask43") !== null)
        {
            $subTask43 = $request->post("subTask43");
        }
        else
        {
            $subTask43 = null;
        }

        $data = Task::where('session_id', $session_id)->first();
        $data->sub_task_41 = $subTask41;
        $data->sub_task_42 = $subTask42;
        $data->sub_task_43 = $subTask43;
        $data->update();
        return view('survey');
    }




}
