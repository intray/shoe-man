 @extends('admin.layout.index')
 @section('content')
 <!-- <div class="main-content">
                <div class="section__content section__content--p30"> -->
                    <div class="container-fluid list-table">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Thêm Bài Viết</h3>
                               
                              	<form action="admin/news/add" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Tiều đề bài viết</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" name="title" id="editor1" rows="3" placeholder="Title"></textarea>
	
								      
								    </div>
								  </div>
								  <div class="form-group">
								  	
								  <div class="form-group">
								    <label for="" class="col-sm-2 control-label">Nội dung</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" name="content" id="editor2" rows="3" placeholder="Content"></textarea>
								      
								      
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="txtimage" class="col-sm-2 control-label">Hình Ảnh</label>
								    <input type="file" name="file"></br>
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
