<?php

namespace appventas;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    protected $table='articulo';

    protected $primaryKey='idarticulo';

    public $timestamps=false;

    
    protected $fillable =[
      'idcategoria',
      'codigo',
      'nombre',
      'stock',
      'descripcion',
      'imagen',
      'estado'
    ];
    protected $guarded =[
    ];
}
