<?php
use App\Models\Banner;
$id=$_REQUEST['id'];
$banner=Banner::find($id);
if($banner==null)
{
    header("location:index.php?option=banner");
}
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Chi tiết banner</h1>
                     <a href="index.php?option=banner" class="btn btn-sm btn-primary">Về danh sách</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header">
                  Noi dung
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th>Tên trường</th>
                           <th>Giá trị</th>
                        </tr>
                     </thead>
                     <tbody>
                     <tr>
                                 <td>ID</td>
                                 <td><?=$banner->id;?></td>
                              </tr>
                              <tr>
                                 <td>name</td>
                                 <td><?=$banner->name;?></td>
                              </tr>
                              <tr>
                                 <td>link</td>
                                 <td><?=$banner->link;?></td>
                              </tr>
                              <tr>
                                 <td>Sắp xếp</td>
                                 <td><?=$banner->sort_order;?></td>
                              </tr>
                              <tr>
                                 <td>Mô tả</td>
                                 <td><?=$banner->position;?></td>
                              </tr>
                              <tr>
                                 <td>Thời gian tạo</td>
                                 <td><?=$banner->created_at;?></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td><?=$banner->created_by;?></td>
                              </tr>
                              <tr>
                                 <td>Thời gian nâng cấp</td>
                                 <td><?=$banner->updated_at;?></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td><?=$banner->updated_by;?></td>
                              </tr>
                              <tr>
                                 <td>Trạng thái</td>
                                 <td><?=$banner->status;?></td>
                              </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>   