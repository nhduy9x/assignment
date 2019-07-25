@extends('admin_layout.main')
@section('tilte','add cate product')
@section('content')
<form enctype="multipart/form-data"
			action="{{ route('save.product') }}"
			method="post">
		@csrf
		<input type="hidden" name="id" value="{{$post->id}}">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>name</label>
					<input type="text" name="name" class="form-control" value="{{ $post->name}}">
					
				</div>
				
				<div class="form-group">
					<label>Danh mục</label>
					<select name="product_id" class="form-control">
						@foreach ($cates as $item)
							<option 
								@if($item->id == $post->product_id)
								selected
								@endif
								value="{{$item->id}}">{{$item->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>price</label>
					<input type="text" name="price" class="form-control" value="{{$post->price}}">
				</div>
				<div class="form-group">
					<label>promotion_price</label>
					<input type="text" name="promotion_price" class="form-control" value="{{$post->promotion_price}}">
					 @if($errors->any())
				      <span class="text-danger">
				        {{$errors->first('promotion_price')}}
				      </span>
				      @endif
				</div>
				<div class="form-group">
					<label>Ảnh bài viết</label>
					{{-- <input type="hidden" name="anh" value="{{$post->image}}">
					<input type="file" name="image" class="form-control" > --}}
					<input type="hidden" name="anh" value="{{$post->image}}">
					{{-- <input type="file" name="feature_image" id="feature_image" class="form-control" > --}}
					<input type="file" name="image" id="asgnmnt_file" class="span8" 
    				 onchange="fileSelected(this)">
				</div>
				
			</div>
			<div class="col-md-6">
				{{-- <div class="row">
					<div class="col-md-6 col-md-offset-3">
						<img src=  width="300" class="img-responsive" id="imageTarget">
					</div>
				</div> --}}
				<div class="row">
					{{-- <div class="col-md-6 col-md-offset-3">
						<img src="@if($post->image == "") 
							{{asset('img/default.jpg')}} 
						@else 
							{{asset($post->image)}} 
						@endif"  width="300" class="img-responsive" id="imageTarget" >
					</div> --}}
				{{-- 	<input type="file" name="asgnmnt_file" id="asgnmnt_file" class="span8" 
    style="display:none;" onchange="fileSelected(this)">
    <br><br> --}}
			    <img id="asgnmnt_file_img" src="@if($post->image == "") 
							{{asset('img/default.jpg')}} 
						@else 
							{{asset($post->image)}} 
						@endif" width="300"
			    >
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Nội dung</label>
					<textarea id="content" class="form-control" name="description" rows="15">{{$post->description }}</textarea>
				</div>
			</div>
		</div>
		<div class="text-right">
			<a href="{{ route('list.post') }}"
				class="btn btn-sm btn-danger">Huỷ</a>
			<button type="submit" class="btn btn-sm btn-primary">Lưu</button>
		</div>
	</form>
@endsection

@section('js')
	<script type="text/javascript">
	function passFileUrl(){
    document.getElementById('asgnmnt_file').click();
    }

    function fileSelected(inputData){
    document.getElementById('asgnmnt_file_img').src = window.URL.createObjectURL(inputData.files[0])
    }
	</script>
@endsection
