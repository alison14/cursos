<?php
require_once 'model/curso.php';

class CursosController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cursos();
    }
    
    public function Index(){
        require_once 'view/headerc.php';
        require_once 'view/curso/curso.php';
        require_once 'view/footerc.php';
    }
    
    public function Crud(){
        $alm = new Cursos();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/headerc.php';
        require_once 'view/curso/curso-editar.php';
        require_once 'view/footerc.php';
    }
    
    public function Guardar(){
        $alm = new Cursos();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index_c.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index_c.php');
    }
}