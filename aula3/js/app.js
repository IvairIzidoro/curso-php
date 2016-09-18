$(document).ready(function(){
    
    $('body').on('submit','.formTarefa', function(){
        $self = $(this);
        
        var callback = function(resp){
            //var bolean = resp.success;
            //alert(bolean);
            if(resp.success == true){
               swal({
                   title: 'Bom Trabalho!',
                   text: resp.msg,
                   type: "success"
               },function(isConfirm){
                    $('body').load(resp.location);
                }); 
            }else{
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
        }
        $.ajax({
            url: $self.attr('action'),
            type: 'post',
            dataType: 'json',
            data: $self.serializeArray(),
            success: callback,
            error: callback
        });
                return false;
    })
    
    
    //$('.addTarefa').click(function(){
        //swal("Bom Trabalho!", "Sua tarefa foi adicionada com sucesso!", "success");
        //return false;
    //});
})