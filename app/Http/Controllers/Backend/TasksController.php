<?php

namespace Taskapp\Http\Controllers\Backend;

use Session;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Taskapp\Http\Controllers\Controller;
/* para la forma extendida en el metodo postStore forma extendida*/
use Taskapp\Models\Task;
/**/

class TasksController extends Controller
{
    public function getIndex( Request $request){
      //$tasks = Auth::user()->tasks()->get();
      $tasks = $request->user()->tasks()->get();
      return View('tasks.tasks')->with('tasks',$tasks);
    }

    public function getCreate(){
      return View('tasks.create');
    }

    public function postStore(Request $request){


      $this->validate(request(), [
          'name' => ['required','max:255'],
      ]);

      // forma extendida: para crear y guardar una nueva tarea.
      /*
      $task = new Task();
      $task->user_id = $request->user()->id;
      $task->fill($request->all());
      $task->save();
      */

      //forma compacta: para crear y guardar una nueva tarea.
      $request->user()->tasks()->create($request->all());
      return redirect()->route('tasks.index');
    }

    public function postEdit(){
      
    }

    public function Destroy($id){
      $tasks = Task::find($id);
      $tasks->delete();
      Session::flash('message','Tarea Eliminada Correctamente');
      return redirect()->route('tasks.index');
    }
}
