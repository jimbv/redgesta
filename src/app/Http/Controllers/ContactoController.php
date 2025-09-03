<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $datos = $request->validate([
            'nombre'  => 'required|string|max:255',
            'email'   => 'required|email',
            'mensaje' => 'required|string',
            'telefono' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        try {
            Mail::raw(
                "Nombre: {$datos['nombre']}\n"
                . "Email: {$datos['email']}\n\n"
                . "Teléfono: {$datos['email']}\n\n"
                . "Mensaje:\n{$datos['mensaje']}",
                function ($message) {
                    $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                            ->to('info@redgesta.ar')
                            ->subject('Nuevo mensaje de contacto');
                }
            );

            return back()->with('status', 'Mensaje enviado con éxito.');
        } catch (\Exception $e) {
            Log::error('Error al enviar el correo de contacto: ' . $e->getMessage());
            return back()->with('status', 'Hubo un error al enviar el mensaje. Intentalo más tarde.');
        }
    }
}
