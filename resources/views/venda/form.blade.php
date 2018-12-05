
      
        <div class="form-group">
             {!! Form::label('produtos_list','Produtos') !!}
           

               {{  Form::select('produtos_list[]', $list_produtos, null, ['class' => 'form-control','multiple' => true,'required']) }}
        </div>

        

     
       <div class="form-group">
            {!!Form::label('descricao','Descrição')!!}       
            {!!Form::textArea('descricao',null, ['class' => 'form-control'])!!}
        </div>

         <div class="form-group">
            {!!Form::submit('Enviar',['class' => 'btn btn-primary'])!!}
    </div>


  