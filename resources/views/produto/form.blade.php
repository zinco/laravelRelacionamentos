<div class="form-group">
            {!!Form::label('nome','Nome')!!}       
            {!!Form::text('nome',null, ['class' => 'form-control','required','placeholder'=>'Nome' ])!!}
     </div>
     <div class="form-group">
            {!!Form::label('Categoria','Descrição')!!}       
            {!!Form::select('categoria_id', $categorias, null)!!}
      </div>
     <div class="form-group">
            {!!Form::label('descricao','Descrição')!!}       
            {!!Form::textArea('descricao',null, ['class' => 'form-control'])!!}
      </div>
      
     <div class="form-group">
            {!!Form::submit('Enviar',['class' => 'btn btn-primary'])!!}
    </div>