<?php
class Clientes extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->views->getView($this, "index");
    }

    public function registrar()
    {
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $confirmar = $_POST['confirmar'];
        $caja = $_POST['caja'];
        $id = $_POST['id'];
        $hash = hash("SHA256", $clave);
        if (empty($usuario) || empty($nombre) || empty($caja)) {
            $msg = array('msg' => 'Todo los campos son obligatorios', 'icono' => 'warning');
        } else {
            if ($id == "") {
                if ($clave != $confirmar) {
                    $msg = array('msg' => 'Las contraseña no coinciden', 'icono' => 'warning');
                } else {
                    $data = $this->model->registrarUsuario($usuario, $nombre, $hash, $caja);
                    if ($data == "ok") {
                        $msg = array('msg' => 'Usuario registrado con éxito', 'icono' => 'success');
                    } else if ($data == "existe") {
                        $msg = array('msg' => 'El usuario ya existe', 'icono' => 'warning');
                    } else {
                        $msg = array('msg' => 'Error al registrar el usuario', 'icono' => 'error');
                    }
                }
            } else {
                $data = $this->model->modificarUsuario($usuario, $nombre, $caja, $id);
                if ($data == "modificado") {
                    $msg = array('msg' => 'Usuario modificado con éxito', 'icono' => 'success');
                } else {
                    $msg = array('msg' => 'Error al modificar el usuario', 'icono' => 'error');
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar(int $id)
    {
        $data = $this->model->editarUser($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminar(int $id)
    {
        $data = $this->model->accionUser(0, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Usuario dado de baja', 'icono' => 'success');
        } else {
            $msg = array('msg' => 'Error al eliminar el usuario', 'icono' => 'error');
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
