<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\Cidade;
use App\Http\Controllers\Controller;
use App\Http\Requests\CidadeRequest;
use App\Http\Transformers\CidadeTransformer;
use App\Http\Resources\Cidade as CidadeResource;
use Illuminate\Http\Requests\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\JsonResponse;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse|CidadeResource 
     */
    public function index()
    {
        return CidadeResource::collection(Cidade::with('postos')->get());
    }
     /**
     * Display the specified resource.
     *
     * @param  Cidade $cidade
     * @return JsonResponse|CidadeResource 
     */

    public function  show(Cidade $cidade)
    {
        return  new CidadeResource($cidade);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CidadeRequest  $request
     * @return JsonResponse|CidadeResource
     */
    // public function store(CidadeRequest $request)
    // {
    //     DB::beginTransaction();
    //     try{
    //         $cidade = CidadeTransformer::toInstance($request->validated());
    //         $cidade->save();
    //         DB::commit();
           
    //     } catch (Exception $e){
    //         Log::info($e->getMessage());
    //         DB::rollBack();
    //         return $this->jsonResponse(["Error"=>$e->getMessage()],403);
            
    //     }
      
    //     return (new CidadeResource($cidade))
    //     ->additional([
    //         "meta" => [
    //             "success" => true,
    //             "message" => "Cidade Criada com Sucesso!"
    //         ]
    //     ]);
      
    // }
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \App\Http\Requests\CidadeRequest  $request
    //  * @param  Cidade $cidade
    //  * @return  JsonResponse
    //  */
    // public function update(CidadeRequest $request,Cidade $cidade)
    // {
   
    //     DB::beginTransaction();
    //     try{
    //         $cidade = CidadeTransformer::toInstance($request->validated(),$cidade);
    //         $cidade->save();
    //         DB::commit();
           
    //     } catch (Exception $e){
    //         Log::info($e->getMessage());
    //         DB::rollBack();
    //         return $this->jsonResponse(["Error"=>$e->getMessage()],403);
            
    //     }
      
    //     return (new CidadeResource($cidade))
    //     ->additional([
    //         "meta" => [
    //             "success" => true,
    //             "message" => "Cidade Alterada com Sucesso!"
    //         ]
    //     ]);
      
    // }
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  Cidade $cidade
    //  * @return  JsonResponse
    //  */
    // public function destroy(Cidade $cidade){
    //     DB::beginTransaction();
    //     try{
    //         $cidade->delete();
    //         $cidade->save();
    //         DB::commit();
    //     } catch (Exception $e){
    //         Log::info($e->getMessage());
    //         DB::rollBack();
    //         return $this->jsonResponse(["Erro"=>$e->getMessage()],409);
    //     }

    //     return $this->jsonResponse(["Message"=>"Cidade deletada com sucesso {$cidade->name}"]);
    // }

 

    
}
