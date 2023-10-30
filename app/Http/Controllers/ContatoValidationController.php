<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoValidationController extends Controller
{
// Create Form
public function createUserContato(Request $request) {
    return view('contato');
  }
  // Store Form data in database
  public function UserContato(Request $request) {
      // Form validation
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'subject'=>'required',
          'message' => 'required'
       ]);
      //  Store data in database
      Contato::create($request->all());
      return back()->with('success', 'Sua mensagem foi enviada com sucesso. Aguarde que o mais breve possível retornaremos!');
  }
  
}