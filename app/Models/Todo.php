<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';
//    public $timestamps = false;
//    protected $connection = 'sqlite';

    protected $fillable = [
        'title',
        'description'
    ];
//    protected $hidden = [
//        'created_at',
//        'updated_at',
//    ];

    public function showTable()
    {
        echo 'Vadim-2107';
        //        return view('todo');
    }

    public function findOrFail($id)
    {
        $todo = Todo::where('id', $id)->get();

    }

    public function writeTask()
    {
        return redirect()->back();
    }
}

$todo = App\Models\Todo::create([
    'title' => 'Задача 1',
    'description' => 'Хорошо выспаться перед дальней дорогой!!!',
]);
