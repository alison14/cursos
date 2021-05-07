<?php
require_once 'model/profesor.php';

class ProfesorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Profesor();
    }
    
    public function Index(){
        require_once 'view/headerp.php';
        require_once 'view/profesor/profesor.php';
        require_once 'view/footerp.php';
    }
    
    public function Crud(){
        $alm = new Profesor();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/headerp.php';
        require_once 'view/profesor/profesor-editar.php';
        require_once 'view/footerp.php';
    }
    
    public function Guardar(){
        $alm = new Profesor();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apellido = $_REQUEST['Apellido'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->Sexo = $_REQUEST['Sexo'];
        $alm->Licenciatura = $_REQUEST['Licenciatura'];
        $alm->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index_p.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index_p.php');
    }
}