<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getAllList()
    {
        $todolists = Todo::get()->toJson(JSON_PRETTY_PRINT);
        if (empty($todolists)) {
            return response()->json('Nenhuma tarefa foi encontrada', 404);
        }
        return response($todolists, 200);
    }

    public function updateList(Request $request, $id)
    {
        $todolist = Todo::where('id', $id)->first();
        if (isset($todolist->id)) {
            $todolist->name = $request->name ?? $todolist->name;
            $todolist->description = $request->description ?? $todolist->description;
            $todolist->done = $request->done ?? $todolist->done;
            $todolist->update();
            return response()->json('Lista atualizada com sucesso!');
        } else {
            return response()->json('A lista de afazeres que você está tentando atualizar não existe, por favor tente novamente!', 404);
        }
    }

    public function deleteList($id)
    {
        $todolist = Todo::where('id', $id)->first();
        if (isset($todolist->id)) {
            $todolist->delete();
            return response()->json('Lista deletada com sucesso!');
        } else {
            return response()->json('A lista de afazeres que você está tentando deletar não existe, por favor tente novamente!', 404);
        }
    }
}
