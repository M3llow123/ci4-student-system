<?php
namespace App\Controllers\Api;
use App\Models\StudentModel;
use CodeIgniter\RESTful\ResourceController;

class Students extends ResourceController {
    protected $modelName = 'App\Models\StudentModel';
    protected $format    = 'json';

    public function index() {
        return $this->respond($this->model->findAll());
    }
    public function show($id = null) {
        $data = $this->model->find($id);
        return $data ? $this->respond($data) : $this->failNotFound('Student not found');
    }
    public function create() {
        $this->model->save($this->request->getJSON(true));
        return $this->respondCreated(['message' => 'Student created']);
    }
    public function update($id = null) {
        $this->model->update($id, $this->request->getJSON(true));
        return $this->respond(['message' => 'Student updated']);
    }
    public function delete($id = null) {
        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Student deleted']);
    }
}