 @extends('admin.layout.index')
 @section('content')
 <!-- <div class="main-content">
                <div class="section__content section__content--p30"> -->
                    <div class="container-fluid list-table">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Thêm Bài Viết</h3>
                               
                              	<form action="admin/type-product/add" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Tên thể loại</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name">
	
								      
								    </div>
								  </div>
								  <div class="form-group">
								  	
								  <div class="form-group">
								    <label for="" class="col-sm-2 control-label">Giới Thiệu</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="depcription" id="inputEmail3" placeholder="Depcription"> 
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="edit-button">
					                    <button type="submit" class="btn btn-info">Thêm</button>
					                    <button type="button" class="btn btn-danger"><a href="">Xóa</a></button>
				                    </div>
								  </div>
								</form>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
               <!--  </div>
            </div>
            
 -->@endsection
