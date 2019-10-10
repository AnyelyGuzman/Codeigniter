<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Usuario extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function logueo($user=null, $pass=null)
    {
        $sql = "SELECT id, nombre, apellido, rol FROM usuarios WHERE usuario = '$user' AND contrasena = '$pass' AND rol=2";
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function logueoAdmin($user=null, $pass=null)
    {
        $sql = "SELECT id, nombre, apellido, rol FROM usuarios WHERE usuario = '$user' AND contrasena = '$pass' AND rol=1";
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function getAll()
    {
        $sql="SELECT * FROM usuarios";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function agregar($nombre, $apellido, $telefono, $direccion, $usuario, $contraseña, $rol)
    {
        $sql="INSERT INTO usuarios(nombre,apellido,telefono,direccion,usuario,contrasena,rol)
        VALUES ('$nombre','$apellido','$telefono','$direccion','$usuario','$contraseña','$rol')";
        $query = $this->db->query($sql);
        return $query;
    }

    public function eliminar($id)
    {
        
        $sql="DELETE FROM usuarios WHERE id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function editar($id, $nombre, $apellido, $telefono, $direccion, $usuario, $contraseña, $rol)
    {
        $sql="UPDATE usuarios SET
        nombre = '$nombre',
        apellido = '$apellido',
        telefono = '$telefono',
        direccion = '$direccion',
        usuario = '$usuario',
        contrasena = '$contraseña',
        rol = $rol
        WHERE id = $id";
        $query = $this->db->query($sql);
        return $query;
    }
}