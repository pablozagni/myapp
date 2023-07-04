<?php

namespace App\Http\Livewire\User\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination ;

    public $search, $deleteId, $deleteName ;

    public function render()
    {
        $clients = Client::where('name','LIKE','%'.$this->search.'%')->paginate(5);
        return view('livewire.user.clients.index',compact('clients'));
    }

    public function limpiar_page() {
        $this->resetPage();
    }

    public function quieroBorrar( $id ) {
        $this->deleteId = $id ;
        $client = Client::findOrFail( $this->deleteId );
        $this->deleteName = $client->name ;
    }

    public function delete() {
        $client = Client::findOrFail( $this->deleteId );
        \Session::flash('success','Client '.$client->name.' deleted!');
        $client->delete();
        $this->deleteId = false ;
        return redirect()->route('clients.index');
    }

}
