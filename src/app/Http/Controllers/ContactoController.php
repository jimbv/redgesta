<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        try {
            Mail::send([], [], function ($message) use ($datos) {
                $message->to('destinatario@tu-dominio.com') // Cambiá esto por tu correo destino
                    ->subject('Nuevo mensaje de contacto')
                    ->setBody(
                        "Nombre: {$datos['nombre']}\nEmail: {$datos['email']}\nMensaje:\n{$datos['mensaje']}",
                        'text/plain'
                    );
            });

            return back()->with('status', 'Mensaje enviado con éxito.');
        } catch (\Exception $e) {
            Log::error('Error al enviar el correo de contacto: ' . $e->getMessage());
            return back()->with('status', 'Hubo un error al enviar el mensaje. Intentalo más tarde.');
        }
    }
}
