@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading" align="center">EDIT DATA TIPE MOBIL
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  <form action="{{ route('tipe.update',$tipe->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_tipe') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Tipe</label>	
			  			<input type="text" name="nama_tipe" class="form-control" value="{{ $tipe->nama_tipe }}"  required>
			  			@if ($errors->has('nama_tipe'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_tipe') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>&nbsp;Done</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection