<?php
require_once $_SERVER ["DOCUMENT_ROOT"]. "Actividad1-2/DOmain/Model/UsuarioModel.php";
interface IUserRepository{

    public function create (UsuarioModel $usuario): int;

    public function findByCedula(string $cedula): UsuarioModel;

    public function count (): int; 

    public function edit (UsuarioModel $usuarioModel);

    public function deleteByCedula(string $cedula);
    
    public function getAllUsuarios(): array; 
} 