 @extends('admin.layout.index')
 @section('content')
 <!-- <div class="main-content">
                <div class="section__content section__content--p30"> -->
                    <div class="container-fluid list-table">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Bài Viết</h3>
                                <div class="table-data__tool">
                                    
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i><a class="them" href="admin/news/add">Thêm</a></button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Tiêu đề</th>
                                                <th>Nội dung</th>
                                                <th>Ảnh</th>
                                                <th>Ngày đăng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($news as $key)
                                            <tr class="tr-shadow">
                                                
                                                <td>{{$key->id}}</td>
                                                <td>{{$key->title}}</td>
                                                <td>{{$key->title}}</td>
                                                <!-- <td>{{$key->content}}</td> -->
                                                <td>{{$key->image}}</td>
                                                <td>{{$key->created_at}}</td>
                                                
                                               
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="edit-list" type="button">
                                                            <i class="zmdi zmdi-edit"></i>
                                                            <a href="admin/news/edit/{{$key->id}}">Sửa</a>
                                                        </button>

                                                        <button class="edit-list" type="button">
                                                            <i class="zmdi zmdi-delete"></i>
                                                            <a href="admin/news/delete/{{$key->id}}">Xóa</a>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
               <!--  </div>
            </div>
 -->@endsection
