<?php
use App\Models\Brand;

$id = $_REQUEST['id'];
$brand =  Brand::find($id);
if($brand==null){
    header("location:index.php?option=brand&cat=trash");
}
$brand->delete();// xóa khỏi CSDL
header("location:index.php?option=brand&cat=trash");