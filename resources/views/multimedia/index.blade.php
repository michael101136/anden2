@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Multimedia</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('multimedia.create') !!}">Crear</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('multimedia.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
    
    
    
    
      <div class="modal fade" id="sliderImagenes">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Slider</h4>
              </div>
              <div class="modal-body">
               <table class="table table-striped" id="tableImagenes">
                    <thead>
                      <tr>
                        <th>Imagen</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody id="sliderTabla">
                     
                     
                    </tbody>
                  </table>

     
                        <div class="row">
                              <div class="col-md-12">   
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            SUBIR IMAGENES
                                        </div>
                                        <div class="panel-body">
                                            {!! Form::open(['route'=> 'imagen.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                                            <div class="dz-message" style="height:200px;">
                                                Drop your files here
                                            </div>
                                            <input type="hidden" name="idMultimedia" id="idMultimedia">
                                            <div class="dropzone-previews"></div>
                                            <button type="submit" class="btn btn-success" id="submit">Save</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                        </div>
                          


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Guardar</button>
              </div>
            </div>
         
          </div>

        
    </div>
@endsection


@section('scripts')
{!!Html::script('/assets/dist/css/dropzone/dropzone.js')!!}

<script>

  function  listarImagenes(id)
                {
                 
                  $('#sliderImagenes').modal('show'); 
               
                     $('#sliderImagenes').modal('show'); 
               
                        var htmlTours;
                        var idMultimedia;
                         $( "#sliderTabla" ).html('');
                     $.ajax({
                               url:'{{ route('listarImagenes') }}/'+id,
                                   type: 'GET',
                               success: function(data) 
                               {
    
                                 $.each(data.data,function(index,element)
                                    { 
                                       htmlTours=htmlTours + "<tr>"+ 
                                                                 "<td>  <img  style='height: 50px;' src='"+element.url+"'> </td>"+
                                                                 "<td> <a  onclick='eliminarImagem("+element.id+",this)' class='btn btn-danger btn-ls'> <i class='fa fa-trash'></i></a>"+  
                                                             "</td>"+
                                                             "<tr>";
                                        idMultimedia =element.multimedia_id;
                                    });
    
                                   $("#idMultimedia").val(id);
    
                                   $("#sliderTabla").append(htmlTours);
    
                               }
                            });
                      
                      
                }
   function eliminarImagem(id,trEliminar)
        {

                 $.ajax({
                             url:'{{ route('EliminarImagenes') }}/'+id,
                             type: 'GET',
                             success: function(data) 
                             {
                                var i = trEliminar.parentNode.parentNode.rowIndex;
                                document.getElementById("tableImagenes").deleteRow(i);
                                 
                             }
                        });  
        }

      
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 20,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();

                    var id=$("#idMultimedia").val();
                    listarImagenes(id);
                    

                });
                this.on("addedfile", function(file) {
                    
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );


            }
        };

        $(document).ready(function(){
    
                
                              

                /*$("#btncrearMultimedia").click(function (e) {
                    e.preventDefault();
                        var data = $('#formCrearMultimedia').serialize();
                         $.ajax({
                                     url:'{{ route('multimedia.store') }}',
                                         type: 'POST',
                                         data:data,
                                     success: function(data) 
                                     {
                                          $("#idMultimedia").val(data.id);
                                          $('#slider').show();
                                          $('#bannerSlider').hide(); //muestro mediante id
                                     }
                                });
                         });*/
       
        });
    </script>
@endsection