<?php
namespace App\Base\Service;

use DB;
use App\Models\IssueModel;
abstract class BaseService
{
    public $model;

    abstract public function __construct();

    public function getAll(){
        return $this->model->all();
    }

    public function show($id){
        return $this->model->find($id);
    }

    public function create($request)
    {
        $data = $this->model;
        $data->create($request->all());
        return $this->model->all();
    }

    public function update($id, $request)
    {
        $data = $this->model->find($id);
        $data->update($request->all());
        return $this->model->find($id);
    }

    public function delete($id)
    {
        $data = $this->model->find($id);
        $data->delete();
    }
}
