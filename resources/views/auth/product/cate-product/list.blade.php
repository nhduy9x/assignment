@extends('admin_layout.main')


@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Bordered Table</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tbody>
    	<tr>
          <th style="width: 10px">#</th>
          <th>name</th>
    
          <th>
          	<a href="{{route('add.cate-p')}}" class="btn btn-xs btn-success">Thêm bài viết</a>
          </th>
        </tr>
        @foreach ($cates as $p)
	        <tr>
	          <td>{{$p->id}}</td>
	          <td>{{$p->name}}</td>
            <td>
             <a href="{{route('xoa.cate-p',$p->id)}}" class="btn btn-sm btn-danger">xoa</a>
             <a href="{{route('sua.cate-p',$p->id)}}" class="btn btn-sm btn-success">upload</a>
            </td>
	          
	        </tr>
        @endforeach
        
      </tbody>
  	  </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix text-center">
      {{$cates->links()}}
    </div>
  </div>
@endsection