/* Documento gerado por Ivair Izidoro   */
$(document).ready(function(){
    
    $('body').on('submit','.formTarefa', function(){
        $self = $(this);
        //Criando a variavel callback que recebe a function
        var callback = function(resp){
            
            //se resp.sucess for verdadeiro vai ser exibido a msg bom trabalho
            if(resp.success == true){
               swal({
                   title: 'Bom Trabalho!',
                   text: resp.msg,
                   type: "success"
               },function(isConfirm){
                    $('body').load(resp.location);
                }); 
            }else{ //senão sera exibido a msg de erro
                swal({
                   title: 'Oops...',
                   text: resp.msg,
                   type: "error"
                },function(isConfirm){
                    $('body').load(resp.location);
               });    
            }
            if(resp.success){
                $self[0].reset();
            }
            /* aqui eu tentei usar uma msg do sweet alert para a edição de tarefas
            
            if(resp.edit == true){
                swal({
                  title: "Are you sure?",
                  text: "You will not be able to recover this imaginary file!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes, delete it!",
                  closeOnConfirm: false
                },
                function(){
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                }); 
            }*/
        }
        $.ajax({
            url: $self.attr('action'),
            type: 'post',
            dataType: 'json',
            data: $self.serializeArray(),
            success: callback,
            error: callback,
            edit: callback,
        });
                return false;
    })
    
    
    //$('.addTarefa').click(function(){
        //swal("Bom Trabalho!", "Sua tarefa foi adicionada com sucesso!", "success");
        //return false;
    //});
})