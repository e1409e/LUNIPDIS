@extends('layouts.base')

@section('content')
<div class="container mb-5 w-75">
    <h2 class="mt-5 text-center">ESTUDIANTES</h2>
    <div class="card card-body shadow kardE"> 
      
  
      <div class="table-responsive" > 
          
            <table id="estu" class="table rounded table-hover  table-lg mb-2 mt-3" >
              <thead>
                <tr>
                  <th class="col-auto"></th>
                  <th class="col-auto">#</th>
                  <th class="col-auto">Nombre</th>
                  <th class="col-auto">Apellido</th>
                  <th class="col-auto">Cedula</th>
                  <th class="col-auto">telefono</th>
                  <th class="col-auto">Correo</th>  
                  <th class="text-nowrap col-auto">Nomb. contacto</th>
                  <th class="text-nowrap col-auto">Tlf. contacto</th>
                  <th class="col-auto">Discapacidad:</th>
                  <th class="col-auto">Observaciones:</th>
                  <th class="col-auto">Seguimiento:</th>
                  <th class="col-auto">Fecha de Nacimiento:</th>
                  <th class="text-nowrap col-auto">Fecha de Registro:</th>
                  <th class="col-auto">Facultad:</th>
                  <th class="col-auto">Carrera:</th>
                  <th class="col-auto">Periodo:</th>
                  
  
  
                  <th class="col-auto">Acciones</th>
              
                </tr>
              </thead>
              <tbody>
                
                
                    <tr>
                      <!-- columnas de la tabla en mysql-->
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto"></td>
                    
  
                      <!--Botones de acciones-->
                        <td>
                          <div class="btn-group">
                            <a href="" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>
  
  
                            <a href="" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                          </div>
                        </td> 
                    </tr>
  
                                 
  
              
              </tbody>
            </table>
  
  
         
          
          
          <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3 mt-3">Nuevo</a>
         
          
          
         
  
      </div>
    </div>
  </div>  
  
  
  <script type="text/javascript">
      $(document).ready(function() {
          $('#estu').DataTable({
              "language": {
                  "url": "{{ asset('JS/es-ES.json') }}"
              },
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            "dom": 'Bflrtpi',
            "pagingType": "simple_numbers",
            "info": true,
            
              buttons: [
                    {
                    extend: 'excelHtml5',
                    text: '<i class=" fa fa-file-excel-o"></i> ',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success',
                  },
                  {
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file"></i> ',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    orientation: 'landscape',
                      pageSize: 'LEGAL',
                  },
                  {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> ',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info',
                    orientation: 'landscape',
                      pageSize: 'LEGAL',
                  },
  
                ],
              
           columnDefs: [
          {
              className: 'dtr-control',
              orderable: false,
              target: 0
          }
      ],
      order: [1, 'asc'],
      responsive: {
          details: {
              type: 'column',
              target: 'tr'
          }
      }
  
          });
      });
  </script>
    
@endsection