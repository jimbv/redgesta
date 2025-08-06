<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Courses;
use App\Models\Category;
use App\Models\Institutions;
use Illuminate\Support\Facades\DB;

class CursosBuscador extends Component
{
    use WithPagination;

    public $categoria = '';
    public $tipo = '';
    public $institucion = '';
    public $buscar = '';

    public function updated($property)
    {
        $this->resetPage();
    }

    public function buscarCursos()
    {
        $this->resetPage();
    } 
    
    public function render()
    {
        $cursos = Courses::query()
            ->when($this->categoria, function ($query) {
                $query->whereHas('categories', function ($q) {
                    $q->where('categories.id', $this->categoria);
                });
            })
            ->when($this->tipo, function ($query) {
                $query->whereRaw("LOWER(tipo) = ?", [$this->tipo]);
            })
            ->when($this->institucion, function ($query) {
                $query->where('institucion', $this->institucion);
            })
            ->when($this->buscar, function ($query) {
                $query->where('denominacion', 'like', '%' . $this->buscar . '%');
            })
            ->paginate(10);

        $tipos = DB::table('courses')
            ->select(DB::raw('LOWER(tipo) as tipo'))
            ->distinct()
            ->pluck('tipo')
            ->filter()
            ->values();  
            
        return view('livewire.cursos-buscador', [
            'tipos' => $tipos,
            'institutions' => Institutions::all(),
            'categories' => Category::all(),
            'cursos' => $cursos,
            'categoria' => $this->categoria,
            'tipo' => $this->tipo,
            'institucion' => $this->institucion,
            'buscar' => $this->buscar,
        ]);
    }
}
