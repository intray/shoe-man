 @extends('admin.layout.index')
 @section('content')
 <!-- <div class="main-content">
                <div class="section__content section__content--p30"> -->
                    <div class="container-fluid list-table">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Sản phẩm</h3>
                                <div class="table-data__tool">
                                    @if(session('thongbao'))
                                        <div class="">{{session('thongbao')}}</div>
                                    @endif
                                    <div class="table-data__tool-right">
                                        <button type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i><a class="them" href="admin/product/add">Thêm</a></button>
                                    </div>
                                </div>
                                <div class="product">
                                	@foreach($product as $sp)
	                                <div class="table-responsive table-responsive-data2">
	                                       <div class="edit-product">
				                                <img class="edit-img" src="source/img/product/feature-product/images/{{$sp->image}}" alt="post">
				                                <div class="name">
				                               		<a href="">{{$sp->name}}</a>
				                               	</div>
				                               	<div class="price">
				                               		<a href="">{{$sp->unit_price}}</a>
				                               	</div>
				                               	<div class="edit-button">
					                               	<button onclick="check_delete()" type="button" class="btn btn-info"><a href="admin/product/edit/{{$sp->id}}">Sửa</a></button>
                                                    <script type="text/javascript">
                                                        function check_delete{
                                                            var r = comfirm("Bạn chắc chắn muốn xóa");
                                                            if (true) {
                                                                
                                                            }
                                                        }
                                                    </script>
					                               	<button type="button" class="btn btn-danger"><a href="admin/product/delete/{{$sp->id}}">Xóa</a></button>
				                               	</div>
				                           </div>
	                                </div>
	                                @endforeach
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
               <!--  </div>
            </div>
 -->@endsection
