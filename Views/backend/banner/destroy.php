<?php
use App\Models\Banner;

$id = $_REQUEST['id'];
$banner =  Banner::find($id);
if($banner==null){
    header("location:index.php?option=banner&cat=trash");
}
$banner->delete();// xóa khỏi CSDL
header("location:index.php?option=banner&cat=trash");