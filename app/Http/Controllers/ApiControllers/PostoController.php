<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Posto;
use App\Http\Requests\PostoRequest;
use App\Http\Transformers\PostoTransformer;
use Illuminate\Http\Request;
use App\Http\Resources\Posto as PostoResource;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  JsonResponse|PostoResource
     */
    public function index()
    {
        return PostoResource::collection(Posto::all());
    }
  /**
     * Display the specified resource.
     *
     * @param  Posto $posto
     * @return  JsonResponse|PostoResource
     */

    public function  show(Posto $posto)
    {
     
        return  new PostoResource($posto);
 
    }
//   /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \App\Http\Requests\PostoRequest  $request
//      * @return  JsonResponse|PostoResource
//      */
//     public function store(PostoRequest $request)
//     {
//         DB::beginTransaction();
//         try{
//             $posto = PostoTransformer::toInstance($request->validated());
//             $posto->save();
//             DB::commit();
           
//         } catch (Exception $e){
//             Log::info($e->getMessage());
//             DB::rollBack();
//             return $this->jsonResponse(["Error"=>$e->getMessage()],403);
            
//         }
      
//         return (new PostoResource($posto))
//         ->additional([
//             "meta" => [
//                 "success" => true,
//                 "message" => "Posto Criado com Sucesso!"
//             ]
//         ]);
      
//     }
//      /**
//      * Update the specified resource in storage.
//      *
//      * @param  \App\Http\Requests\PostoRequest $request
//      * @param  Posto $posto
//      * @return JsonResponse
//      */
//     public function update(PostoRequest $request,Posto $posto)
//     {
   
//         DB::beginTransaction();
//         try{
//             $posto = PostoTransformer::toInstance($request->validated(),$posto);
//             $posto->save();
//             DB::commit();
           
//         } catch (Exception $e){
//             Log::info($e->getMessage());
//             DB::rollBack();
//             return $this->jsonResponse(["Error"=>$e->getMessage()],403);
            
//         }
      
//         return (new PostoResource($posto))
//         ->additional([
//             "meta" => [
//                 "success" => true,
//                 "message" => "Posto Alterado com Sucesso!"
//             ]
//         ]);
      
//     }
// /**
//      * Remove the specified resource from storage.
//      * @param  Posto $posto
//      * @return JsonResponse
//      */
//     public function destroy(Posto $posto){
//         DB::beginTransaction();
//         try{
//             $posto->delete();
//             $posto->save();
//             DB::commit();
//         } catch (Exception $e){
//             Log::info($e->getMessage());
//             DB::rollBack();
//             return $this->jsonResponse(["Erro"=>$e->getMessage()],409);
//         }

//         return $this->jsonResponse(["Message"=>"Posto deletado com sucesso {$posto->id}"]);
//     }
}
