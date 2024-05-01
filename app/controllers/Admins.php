<?php

class Admins extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Admin();
    $rows = $x->findAll();

    $this->view('admins/index', [
      'admins' => $rows
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $errors = [];
    $admin = new Admin();

    if (count($_POST) > 0) {

      if ($admin->validate($_POST)) {

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $admin->insert($_POST);

        redirect('admins');
      } else {
        $errors = $admin->errors;
      }
    }

    $this->view('admins/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Admin();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('admins');
    }

    $this->view('admins/edit', [
      'admin' => $row
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Admin();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('admins');
    }

    $this->view('admins/delete', [
      'admin' => $row
    ]);
  }
}