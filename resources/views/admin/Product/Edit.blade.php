 @extends('admin.layout.index')
 @section('content')
 <!-- <div class="main-content">
                <div class="section__content section__content--p30"> -->
                    <div class="container-fluid list-table">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Sửa Sản phẩm</h3>
                              	<form action="admin/product/edit/{{$product->id}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Tên sản phẩm</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name" value="{{$product->name}}">
								    </div>
								  </div>
								  <div class="form-group">
								  	<label class="">Chọn loại sản phẩm</label>
                                        <select name="type_products">
                                        			@foreach($type_products as $key)
                                                    <option value="{{$key->id}}">{{$key->name}}</option>
                                                    @endforeach
                                        </select>
								  </div>
								  <div class="form-group">
								    <label for="" class="col-sm-2 control-label">Giới thiệu</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" name="description" id="editor1" rows="3" placeholder="Description" value="{{$product->description}}">{{$product->description}}</textarea>
								      <script type="text/javascript">
								      	CKEDITOR.replace( 'editor1', {
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
								    <label for="txtgia" class="col-sm-2 control-label">Giá</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="unit_price" id="inputPassword3" placeholder="Price" value="{{$product->unit_price}}">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="txtgia" class="col-sm-2 control-label">Giảm giá</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="promotion_price" id="inputPassword3" placeholder="Price" value="{{$product->unit_price}}">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="txtimage" class="col-sm-2 control-label">Hình Ảnh</label>
								    <input type="file" name="file">{{$product->image}}</br>
								 
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
