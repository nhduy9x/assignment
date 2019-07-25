@extends('admin_layout.main')
@section('tilte','list cate product')
@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Tong bang post {{$posts->count()}}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tbody>
    	<tr>
          <th style="width: 10px">#</th>
          <th>name</th>
          <th>Danh muc</th>
          <th>price</th>
          <th>description</th>

          <th>Ảnh</th>
          <th>
          	<a href="{{route('add.product')}}" class="btn btn-xs btn-success">Thêm bài viết</a>
          </th>
        </tr>
        @foreach ($posts as $p)
	        <tr>
            
	          <td>{{$p->id}}</td>
	          <td>{{str_limit($p->name, 10, ' ...')}}</td>
            <td>{{$p->cate_product->name}}</td>
           <td>{{$p->unit_price}}</td>
            <td>{!!str_limit($p->description,50,'...')!!}</td>
	          <td>
	          	<img src="{{asset($p->image)}}" width="100">
	          </td>
            <td>
             <a href="{{route('xoa.product',$p->id)}}" class="btn btn-sm btn-danger">xoa</a>
             <a href="{{route('sua.product',$p->id)}}" class="btn btn-sm btn-success">upload</a>
            </td>
	          
	        </tr>
        @endforeach
        
      </tbody>
  	  </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix text-center">
      {{$posts->links()}}
    </div>
  </div>
@endsection