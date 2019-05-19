 @extends('admin.layout.index')
 @section('content')
 <!-- <div class="main-content">
                <div class="section__content section__content--p30"> -->
                    <div class="container-fluid list-table">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Thêm Bài Viết</h3>
                              	<form action="admin/news/edit/{{$news->id}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Tiều đề bài viết</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" name="title" id="editor1" rows="3" placeholder="Title">{{$news->title}}</textarea>

								    </div>
								  </div>
								  <div class="form-group">
								  <div class="form-group">
								    <label for="" class="col-sm-2 control-label">Nội dung</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" name="content" id="editor2" rows="3" placeholder="Content" value="{{$news->content}}">{{$news->content}}</textarea>
								      <script type="text/javascript">
								      	CKEDITOR.replace( 'editor2', {
								        filebrowserBrowseUrl: '{{ asset('editor/ckfinder/ckfinder.html') }}',
								        filebrowserImageBrowseUrl: '{{ asset('editor/ckfinder/ckfinder.html?type=Images') }}',
								        filebrowserFlashBrowseUrl: '{{ asset('editor/ckfinder/ckfinder.html?type=Flash') }}',
								        filebrowserUploadUrl: '{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
								        filebrowserImageUploadUrl: '{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
								        filebrowserFlashUploadUrl: '{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
								    } );
								      </script>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="txtimage" class="col-sm-2 control-label">Hình Ảnh</label>
								    <input type="file" name="file">{{$news->image}}</br>
								  </div>
								  <div class="form-group">
								    <div class="edit-button">
					                    <button type="submit" class="btn btn-info">Sửa</button>
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
