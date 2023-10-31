import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder } from '@angular/forms';

import { CrudService } from 'src/app/servicios/crud.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-agregar',
  templateUrl: './agregar.component.html',
  styleUrls: ['./agregar.component.css']
})
export class AgregarComponent implements OnInit {

  formularioGrupo: FormGroup;

  constructor(public formulario: FormBuilder, private crudServicio: CrudService, private ruta: Router) {

    this.formularioGrupo = this.formulario.group({
      id: [''],
      Nacionalidad_Titular: [''],
      Cedula_Titular: [''],
      Nombre_TItular_Beneficiario: [''],
      Apellido_TItular_Beneficiario: [''],
      Estado_Civil: [''],
      Sexo_Titular_Beneficiario: [''],
      Fecha_Nacimiento_Titular_Beneficiario: [''],
      Parentesco: [''],
      Nombre_Agente_Recaudador: [''],
      Tipo_de_Cuenta: [''],
      Numero_de_Cuenta: [''],
      Codigo_Cia_Seguro: [''],
      Tipo_de_Vencimiento: [''],
      Codigo_Empresa: [''],
      Codigo_Sucursal: [''],
      Numero_de_Telefono: [''],
      Correo_Electronico: [''],
      Codigo_Plan_en_SISER: [''],
      Codigo_Productor_Asesor: [''],
      Estado: [''],
      Estado_Observacion: ['']

    });
   

  }

  ngOnInit(): void {
  }

  enviardatos(): void {
    this.crudServicio.AgregarEmpleado(this.formularioGrupo.value).subscribe(resutl => {
      this.ruta.navigateByUrl('/');
    });

  }

}
