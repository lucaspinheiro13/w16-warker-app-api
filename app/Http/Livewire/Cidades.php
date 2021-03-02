<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Cidade;
use Livewire\WithPagination;
class Cidades extends Component
{
    public $cidade_id ,$nome_da_cidade, $longitude, $latitude;
    public $isOpen = 0;
  
    use WithPagination;
     /**
     * Renderiza a Tela com Paginação 
     *
     * @var array
     */
    public function render()
    {
      
        return view('livewire.cidades',[
            'cidades'=>Cidade::paginate(20)
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
        $this->nome_da_cidade = '';
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
            'nome_da_cidade' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude'=> 'required|numeric'
        ]);
        
        $cidade = Cidade::updateOrCreate(['id'=>$this->cidade_id],[
            'nome_da_cidade'=>$this->nome_da_cidade,
            'latitude'=>$this->latitude,
            'longitude'=>$this->longitude
        ]);
        $cidade->save();
        // session()->flash('message', 
        //     $this->cidade_id ? 'Cidade Atualizada com Successo.' : 'Cidade criada com Successo.');
  
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
        $cidade = Cidade::findOrFail($id);
        $this->id = $id;
        $this->nome_da_cidade = $cidade->nome_da_cidade;
        $this->longitude = $cidade->longitude;
        $this->latitude = $cidade->latitude;
    
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
        Cidade::find($id)->delete();
        // session()->flash('message', 'Cidade Apagada com Sucesso.');
    }
}