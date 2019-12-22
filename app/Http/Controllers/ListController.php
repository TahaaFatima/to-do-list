<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\to_do_list;

class ListController extends Controller
{
    public function index(){
        $data['tasks']     = to_do_list::all();
        $data['page_view'] = 'home';
        return view('layout', $data);
    }

    public function store(){
        $validated_data = request()->validate([
            'task'      => ['required','min:3']
        ]);
        to_do_list::create($validated_data);

        return back();
    }

    public function update(to_do_list $task){

        if(request()->has('task')){
            $validated_data = request()->validate([
                'task'=> ['required','min:3']
            ]);
        }else{
            $validated_data =[
                'completed' => request()->has('completed')
            ];
        }
        $task->update($validated_data);
        return redirect(url('/'));
    }

    public function edit(to_do_list $task){
        $data['task']   = $task; 
        $data['page_view'] = 'edit';

        return view('layout', $data);
    }

    public function destroy(to_do_list $task){
        $task->delete();
        return back();
    }
}
