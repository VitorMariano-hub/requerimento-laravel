<?php

namespace App\Http\Controllers;
use App\Requerimento;
use Illuminate\Http\Request;
use Validator;
class RequerimentoController extends Controller
{
    
    
     //Validando formulario
     protected function validatedData($request){
        $validator = Validator::make($request->all(), [
                "nome" => "required",
                "email"=> "required",
                "modelo" => "required"
               
       ]);
       return $validator;
        }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requerimentos = Requerimento::all();
  
        return view('requerimento.index',compact('requerimentos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requerimentos = Requerimento::find($id);
        return view('requerimento.show' , compact ('requerimentos'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requerimentos = Requerimento::find($id);
        return view('requerimento.edit', compact('requerimentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validatedData($request);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $requerimentos = Requerimento::find($id);
        $dados = $request->all();
        $requerimentos->update($dados);
        return redirect()->route('requerimento');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Requerimento::find($id)->delete();
        return redirect()->route('requerimento');
    }

    public function delete($id)
    
    {
        $requerimentos = Requerimento::find($id);
        return view('requerimento.delete', compact('requerimentos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function createStepOne(Request $request)
    {
       
        $requerimento = $request->session()->get('requerimento');
  
        return view('requerimento.create-step-one', compact('requerimento'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
        ]);
  
        if(empty($request->session()->get('requerimento'))){
            $requerimento = new Requerimento();
            $requerimento->fill($validatedData);
            $request->session()->put('requerimento', $requerimento);
        }else{
            $requerimento = $request->session()->get('requerimento');
            $requerimento->fill($validatedData);
            $request->session()->put('requerimento', $requerimento);
        }
  
        return redirect()->route('requerimento.create.step.two');
    }

    /**
     * Show the step Two Form for creating a new requerimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $requerimento = $request->session()->get('requerimento');
  
        return view('requerimento.create-step-two',compact('requerimento'));
    }

     /**
     * Show the step Two Form for creating a new requerimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'endereco' => 'required',
            'end_numero' => 'required',
            'bairro' => 'required',
            'municipio' => 'required',
            'uf' => 'required',
            'cep' => 'required',
        ]);
  
        $requerimento = $request->session()->get('requerimento');
        $requerimento->fill($validatedData);
        $request->session()->put('requerimento', $requerimento);
  
        return redirect()->route('requerimento.create.step.three');
    }


    /**
     * Show the step Three Form for creating a new requerimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $requerimento = $request->session()->get('requerimento');
  
        return view('requerimento.create-step-three',compact('requerimento'));
    }

     /**
     * Show the step Three Form for creating a new requerimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'modelo' => 'required',
            'ano' => 'required',
            'potencia' => 'required',
            'icms' => 'required',
           
        ]);
  
        $requerimento = $request->session()->get('requerimento');
        $requerimento->fill($validatedData);
        $request->session()->put('requerimento', $requerimento);
  
        return redirect()->route('requerimento.create.step.four');
    }



   /**
     * Show the step Four Form for creating a new requerimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepFour(Request $request)
    {

        $requerimento = $request->session()->get('requerimento');
        return view('requerimento.create-step-four',compact('requerimento'));
    }

    /**
     * Show the step Four Form for creating a new requerimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepFour(Request $request)
    {

        $requerimento = $request->session()->get('requerimento');
        $requerimento->save();
  
        $request->session()->forget('requerimento');
  
        return redirect()->route('requerimento');
    }
}
