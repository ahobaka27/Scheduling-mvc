<?php

class Students extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Student();
    $rows = $x->findAll();

    $this->view('students/index', [
      'students' => $rows
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $errors = [];
    $student = new Student();

    if (count($_POST) > 0) {

      if ($student->validate($_POST)) {

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $student->insert($_POST);

        redirect('students');
      } else {
        $errors = $student->errors;
      }
    }

    $this->view('students/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Student();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('students');
    }

    $this->view('students/edit', [
      'student' => $row
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Student();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('students');
    }

    $this->view('students/delete', [
      'student' => $row
    ]);
  }
}