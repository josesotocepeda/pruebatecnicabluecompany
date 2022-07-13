<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $producto->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('fecha_expiracion') }}
            {{ Form::date('fecha_expiracion', $producto->fecha_expiracion, ['class' => 'form-control' . ($errors->has('fecha_expiracion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Expiracion']) }}
            {!! $errors->first('fecha_expiracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {!! Form::label('categoria_id', 'Categoría:') !!}
            {!! Form::select('categorias[]', $categorias, $producto->categorias, ['class'=>'form-control', 'multiple' => true]) !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>