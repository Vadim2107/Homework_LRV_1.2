<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';
//    public $timestamps = false;
//    protected $connection = 'sqlite';

    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at'
    ];
//    protected $hidden = [
//        'created_at',
//        'updated_at',
//    ];

    static function showTable()
    {
        $todos = DB::table('todos')->get();

//        return view('todo', ['todos' => $todos]);
                return $todos;
//        foreach ($todos as $todo) {
//            echo "$todo->id\n $todo->title\n";
//        }
    }

    static function showId($id)
    {
//        echo "Vadim-2107 id = .$id";
        $todoId = DB::table('todos')->find($id);

//        return view('todo', ['todos' => $todoId]);
        return $todoId;
    }

    static function writeTask()
    {
        DB::table('todos')->insert([
            'title' => 'TASK-12',
            'description' => 'VADIM-12',
            'created_at' => '2021-05-16 19:38:00',
            'updated_at' => '2021-05-16 19:39:49'
        ]);
//        echo "Vadim-create: \n";
//        return DB::table('todos')->get();

        return redirect()->route('/todo');
//        return redirect()->route(Route::redirect('/todo/create', '/todo'));
//        return Route::redirect('/todo/create', '/todo');
//        return redirect()->back();
    }
}
