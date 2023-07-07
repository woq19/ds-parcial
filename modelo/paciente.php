<?php

class Paciente{
    public $Id;
    public $Nombre;
    public $Apellido;
    public $Documento;
    public $Edad;
    public $Email;
    public $ListaTurnos = array();

    public function MostrarDatos() {
        echo 'Paciente: <br>';
        echo '-Id: '.$this->Id.'<br>';
        echo '-Nombre: '.$this->Nombre.'<br>';
        echo '-Apellido: '.$this->Apellido.'<br>';
        echo '-Documento: '.$this->Documento.'<br>';
        echo '-Edad: '.$this->Edad.'<br>';
        echo '-Email: '.$this->Email.'<br>';
        if ($this->Edad>-1 and $this->Edad<18) {
            echo '-Paciente menor de edad';
        }
        else if ($this->Edad>17 and $this->Edad<75) {
            echo '-Paciente mayor de edad';
        }
        else if ($this->Edad>74) {
            echo '-Paciente en la tercera edad';
            }
        else echo '-La edad del paciente fue indicada incorrectamente';
        
        echo '<hr>';
        echo 'Turnos';
        echo '<hr>';
        foreach($this->ListaTurnos as $Lt){
            echo '-Id  : '.$Lt->Id.'<br>';
            echo '-Fecha  : '.$Lt->Fecha.'<br>';
            echo '-Hora : '.$Lt->Hora.'<br>';
            echo '-Medico : '.$Lt->Medico.'<br>';
            echo '---Id Especialidad: '.$Lt->Especialidad->Id.'<br>';
            echo '---Descripcion Especialidad: '.$Lt->Especialidad->Descripcion.'<br>';
            echo '<hr>';
        }
        
    }
    
}