<?php
  
namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Posto;


class Postos extends Component
{
    public $posto_id, $cidade_id , $reservatorio, $longitude, $latitude;
    public $isOpen = 0;
  
    use WithPagination;
    /**
     * Renderiza a Tela com Paginação 
     *
     * @var array
     */
    public function render()
    {
     
        return view('livewire.postos',[
            'postos'=>Posto::paginate(20)
            ]);
    }
  
    /**
     * Abre o modal Limpando o form
     *
     * @return void
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * Define o modal como Aberto
     *
     * @return void
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * Define o modal como Fechado
     *
     * @return void
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * Reseta o Formulário do modal
     *
     * @return void
     */
    private function resetInputFields(){
        $this->cidade_id = '';
        $this->reservatorio = '';
        $this->longitude = '';
        $this->latitude = '';
    }
     
    /**
     * Armazena ou Atualiza Dado no banco com validação
     *
     * @var array
     * @return void
     */
    public function store()
    {
        $this->validate([
            'cidade_id' => 'required|numeric|exists:cidades,id',
            'reservatorio' => 'required|numeric|between:0,100.00',
            'latitude' =>'numeric|required',
            'longitude' =>'numeric|required',

        ]);
        
        $cidade = Posto::updateOrCreate(['id'=>$this->posto_id,'cidade_id'=>$this->cidade_id],[
            'reservatorio'=>$this->reservatorio,
            'latitude'=>$this->latitude,
            'longitude'=>$this->longitude
        ]);
        $cidade->save();
        session()->flash('message', 
            $this->cidade_id ? 'Cidade Atualizada com Successo.' : 'Cidade criada com Successo.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * Atribui os dados da view as propriedades do componente e Exibe no modal.
     *
     * @var array
     * @return void
     */
    public function edit($id)
    {
        $posto = Posto::findOrFail($id);
        $this->posto_id = $id;
        $this->cidade_id = $posto->cidade_id;
        $this->reservatorio = $posto->reservatorio;
        $this->longitude = $posto->longitude;
        $this->latitude = $posto->latitude;
    
        $this->openModal();
    }
     
    /**
     * Apaga o registro selecionado
     *
     * @var $id 
     * @return void
     */
    public function delete($id)
    {
        Posto::find($id)->delete();
        session()->flash('message', 'Cidade Apagada com Sucesso.');
    }
}