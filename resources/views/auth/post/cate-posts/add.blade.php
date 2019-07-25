@extends('admin_layout.main')
@section('tilte','add cate post')
@section('content')
<form enctype="multipart/form-data"
			action="{{route('save.cate')}}"
			method="post">
		@csrf
		<input type="hidden" name="id" value="{{$cates->id}}">

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Tác giả</label>
					<input type="text" name="name" class="form-control" value="{{$cates->name}}">
				</div>

				@if($errors)
						<span class="text-success">{{$errors->first('name')}}</span>
				@endif
			</div>
		
		</div>

		
		<div class="text-left">
			<a href="{{route('list.cate')}}"
				class="btn btn-sm btn-danger">Huỷ</a>
			<button type="submit" class="btn btn-sm btn-primary">Lưu</button>
		</div>
	</form>
@endsection
