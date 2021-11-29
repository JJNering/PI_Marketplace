<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name', 'url', 'price', 'description'];

    // Relacionamento para recuperar os detalhes de um plano
    public function details()
    {
        return $this->hasMany(DetailPlan::class);
    }

    // Método para pesquisar planos na rota plan.search
    public function search($filter = null)
    {
        $results = $this
            ->where('name', 'LIKE', "%{$filter}%")
            ->orWhere('description', 'LIKE', "%{$filter}%")
            ->paginate();

        return $results;
    }
}
