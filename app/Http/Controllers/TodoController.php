<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Route;

class TodoController extends Controller
{
    /**
     * Отображение списка ресурсов (таблицы).
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        echo "Таблица - todos:\n";
//        return Todo::showTable();
        return Todo::paginate(10);
    }

    /**
     * Отображение формы для создания нового ресурса (строки таблицы).
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return Todo::writeTask();
    }

    /**
     * Создание новой записи.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Todo::create($request->validated());
    }

    /**
     * Отображение указанного ресурса.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        return Todo::showId($id);
        return Todo::findOrFail($id);
    }

    /**
     * Отображение формы для редактирования указанного ресурса.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Обновление указанной записи.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $todo->fill($request->validated());
        return $todo->save();
    }

    /**
     * Удаление указанного ресурса.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        if ($todo->delete()) {
            return response(null, Response::HTTP_NO_CONTENT);
        }
        return null;
    }
}
