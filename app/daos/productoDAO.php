<?php

namespace App\Daos;

use App\Models\ProductoModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class ProductoDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll(bool $estado)
    {
        $result = ProductoModel::where('Estado', $estado)
            ->orderBy('IdProduct', 'DESC')
            ->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = ProductoModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdProduct = 0;
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
        $model = new ProductoModel();
        $model->IdProduct = $obj->IdProduct;
        $model->IdMarca = $obj->IdMarca;
        $model->IdCateg = $obj->IdCateg;
        $model->IdUnidad = $obj->IdUnidad;
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
        $model = ProductoModel::find($obj->IdProduct);
        $model->Idcateg = $obj->IdCateg;
        $model->IdMarca = $obj->IdMarca;
        $model->IdUnidad = $obj->IdUnidad;
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
        $model = ProductoModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE productos SET estado=0 where idproduct?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
