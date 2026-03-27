<?php
namespace App\Controllers;
use App\Models\StudentModel;

class Students extends BaseController {
    public function index() {
    $model = new StudentModel();
    $search = $this->request->getGet('search');
    if ($search) {
        $students = $model->like('name', $search)->orLike('course', $search)->paginate(5);
    } else {
        $students = $model->paginate(5);
    }
    $pager = $model->pager;
    return view('students/index', ['students' => $students, 'pager' => $pager, 'search' => $search]);
   }
    public function create() {
        return view('students/create');
    }
    public function store() {
        $model = new StudentModel();
        $model->save($this->request->getPost());
        return redirect()->to('/students');
    }
    public function edit($id) {
        $model = new StudentModel();
        return view('students/edit', ['student' => $model->find($id)]);
    }
    public function update($id) {
        $model = new StudentModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('/students');
    }
    public function delete($id) {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('/students');
    }
}
