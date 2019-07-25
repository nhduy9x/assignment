@extends('admin_layout.main')
@section('content')
<form enctype="multipart/form-data"
			action="{{route('save.cate-p')}}"
			method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$cates->id}}">

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Category</label>
					<input type="text" name="name" class="form-control" value="{{$cates->name}}">
				</div>
				@if($errors)
						<span class="text-danger">{{$errors->first('name')}}</span>
				@endif
			</div>
		
		</div>

		
		<div class="text-left">
			<a href="{{route('list.cate-p')}}"
				class="btn btn-sm btn-danger">Huỷ</a>
			<button type="submit" class="btn btn-sm btn-primary">Lưu</button>
		</div>
	</form>
@endsection
