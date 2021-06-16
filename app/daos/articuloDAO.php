<?php

namespace App\Daos;

use App\Models\ArticuloModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class ArticuloDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll(bool $estado)
    {
        $result = ArticuloModel::where('Estado', $estado)
            ->orderBy('IdArticulo', 'DESC')
            ->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = ArticuloModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdArticulo = 0;
            $model->Nombre = '';
            $model->Precio = 0;
            $model->PrecioVenta = 0;
            $model->Stock = 0;
            $model->StockMinimo = 0;
            $model->Estado = 0;
        }
        return $model;
    }
    public function create($obj)
    {
        $model = new ArticuloModel();
        $model->IdArticulo = $obj->IdArticulo;        
        $model->IdCategoria = $obj->IdCategoria;        
        $model->Nombre = $obj->Nombre;
        $model->Precio = $obj->Precio;
        $model->PrecioVenta = $obj->PrecioVenta;
        $model->Stock = $obj->Stock;
        $model->StockMinimo = $obj->StockMinimo;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function update($obj)
    {
        $model = ArticuloModel::find($obj->IdArticulo);
        $model->IdCategoria = $obj->IdCategoria;        
        $model->Nombre = $obj->Nombre;
        $model->Precio = $obj->Precio;
        $model->PrecioVenta = $obj->PrecioVenta;
        $model->Stock = $obj->Stock;
        $model->StockMinimo = $obj->StockMinimo;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = ArticuloModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE articulos SET estado=0 where IdArticulo?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
