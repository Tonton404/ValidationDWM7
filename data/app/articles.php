<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $table = 'articles';

    public $primaryKey = 'id';

    public $timestamps = false;

    protected $bdd = array('article', 'marque', 'prix_vente', 'stock');
}
