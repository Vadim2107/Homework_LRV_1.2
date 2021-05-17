<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    static function showTable()
    {
        return $todos = DB::table('todos')->get();

//        return view('todo', ['todos' => $todos]);
//        foreach ($todos as $todo) {
//            echo "$todo->id\n $todo->title\n";
//        }
    }

    static function showId($id)
    {
        return Todo::findOrFail($id);
    }

    static function writeTask()
    {
        DB::table('todos')->insert([
            'title' => 'TASK-12',
            'description' => 'VADIM-12',
            'created_at' => '2021-05-16 19:38:00',
            'updated_at' => '2021-05-16 19:39:49'
        ]);

        return redirect()->route('todo');
    }
}
