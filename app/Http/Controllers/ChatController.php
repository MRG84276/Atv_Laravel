<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    
    public function index()
    {
        $chats = Chat::all();
        return response()->json($chats,200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
          'medico_id' => 'required|exists:medicos,medico_id',
          'paciente_id' => 'required|exists:pacientes,paciente_id',
          'orl' => 'required|string|max:255',
        ]);
        $validated['last_updated'] = now();
        $chat = Chat::create($validated);
        return response()->json($chat, 201);
    }

    public function show(Chat $chat)
    {
        return response()->json($chat, 200);
    }

    public function update(Request $request, Chat $chat)
    {
        $validated = $request->validate([
            'medico_id' => 'required|exists:medicos,medico_id',
            'paciente_id' => 'required|exists:pacientes,paciente_id',
            'orl' => 'required|string|max:255',
        ]);
        $validated['last_updated'] = now();
        $chat->update($validated);
        return response()->json($chat, 200);
    }

    public function destroy(Chat $chat)
    {
        $chat->delete();
        return response()->json(null, 204);
    }

    public function create(Chat $chat)
    { 
        return response()->json([
        'medicos'   => Medico::select('medico_id', 'nome')->get(),
        'pacientes' => Paciente::select('paciente_id', 'nome')->get(),
        ], 200);
    }

    public function edit(Chat $chat)
    {
       return response()->json([
        'chat'      => $chat->load(['medico', 'paciente']),
        'medicos'   => Medico::select('medico_id', 'nome')->get(),
        'pacientes' => Paciente::select('paciente_id', 'nome')->get(),
    ], 200);

    }
}
