
<?php
error_reporting(0);
$con=mysql_connect("localhost:3306","root","amit");
mysql_select_db("demo",$con);

extract($_POST);



$target_dir = "test_upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
    echo "File Format Not Suppoted";
} 
else
{
$video_path=$_FILES['fileToUpload']['name'];
mysql_query("insert into video(video_name) values('$video_path')");
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
echo "uploaded ";
}
}
//display all uploaded video
if($disp)
{
$query=mysql_query("select * from video");
	while($all_video=mysql_fetch_array($query))
	{?>
	 
	 <video width="300" height="200" controls>
	<source src="test_upload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php }
}
?>
