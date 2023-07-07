<?php

require_once 'modelo/especialidad.php';
require_once 'modelo/paciente.php';
require_once 'modelo/turno.php';

$e1=new Especialidad;
$e1->Id=1;
$e1->Descripcion='Clínica';

$e2=new Especialidad;
$e2->Id=2;
$e2->Descripcion='Traumatología';

$t1=new ListaTurnos;
$t1->Id=1;
$t1->Fecha='01/06/2023';
$t1->Hora='17:00';
$t1->Medico='Armando Rodriguez';
$t1->Especialidad=$e1;

$t2=new ListaTurnos;
$t2->Id=2;
$t2->Fecha='01/07/2023';
$t2->Hora='18:00';
$t2->Medico='Graciela Mendez';
$t2->Especialidad=$e2;

$p=new Paciente;
$p->Id=1;
$p->Nombre='Alberto';
$p->Apellido='Juarez';
$p->Documento=12123456;
$p->Edad=$_GET['Edad'];
$p->Email='aj@gmail.com';

$p->ListaTurnos[]=$t1;
$p->ListaTurnos[]=$t2;

$p->MostrarDatos();