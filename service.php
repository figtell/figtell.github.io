<?php
    $user_id = $_GET["teamID"];
    //$user_name = $_GET["teamName"];
    $evt = $_GET["evnt"];

	$title[0]="競賽團隊名稱";
	$title[1]="競賽團隊Logo";
	$title[2]="參賽組別";
	$title[3]="指導老師(一)姓名";
	$title[4]="指導老師(一)服務學校";
	$title[5]="指導老師(一)聯絡市話";
        $title[6]="指導老師(一)聯絡手機";
        $title[7]="指導老師(一)Email";
	$title[8]="指導老師(二)姓名";
	$title[9]="指導老師(二)服務學校";
	$title[10]="指導老師(二)聯絡市話";
        $title[11]="指導老師(二)聯絡手機";
        $title[12]="指導老師(二)Email";

	$title[13]="隊長姓名";
	$title[14]="隊長性別";
	$title[15]="隊長身份證字號";
	$title[16]="隊長生日";
	$title[17]="隊長衣服尺寸";
	$title[18]="隊長監護人";
	$title[19]="隊長就讀學校";
	$title[20]="隊長年級";
	$title[21]="隊長Email";
	$title[22]="隊長聯絡電話";

	$title[23]="1號隊員姓名";
	$title[24]="1號隊員性別";
	$title[25]="1號隊員身分證字號";
	$title[26]="1號隊員生日";
	$title[27]="1號隊員衣服尺寸";
	$title[28]="1號隊員監護人";
	$title[29]="1號隊員就讀學校";
	$title[30]="1號隊員年級";
	$title[31]="1號隊員聯絡Email";
	$title[32]="1號隊員連絡電話";

	$title[33]="2號隊員姓名";
	$title[34]="2號隊員性別";
	$title[35]="2號隊員身分證字號";
	$title[36]="2號隊員生日";
	$title[37]="2號隊員衣服尺寸";
	$title[38]="2號隊員監護人";
	$title[39]="2號隊員就讀學校";
	$title[40]="2號隊員年級";
	$title[41]="2號隊員聯絡Email";
	$title[42]="2號隊員連絡電話";

        $title[43]="3號隊員姓名";
	$title[44]="3號隊員性別";
	$title[45]="3號隊員身分證字號";
	$title[46]="3號隊員生日";
	$title[47]="3號隊員衣服尺寸";
	$title[48]="3號隊員監護人";
	$title[49]="3號隊員就讀學校";
	$title[50]="3號隊員年級";
	$title[51]="3號隊員聯絡Email";
	$title[52]="3號隊員連絡電話";

	$title[53]="4號隊員姓名";
	$title[54]="4號隊員性別";
	$title[55]="4號隊員身分證字號";
	$title[56]="4號隊員生日";
	$title[57]="4號隊員衣服尺寸";
	$title[58]="4號隊員監護人";
	$title[59]="4號隊員就讀學校";
	$title[60]="4號隊員年級";
	$title[61]="4號隊員聯絡Email";
	$title[62]="4號隊員連絡電話";

	$title[63]="5號隊員姓名";
	$title[64]="5號隊員性別";
	$title[65]="5號隊員身分證字號";
	$title[66]="5號隊員生日";
	$title[67]="5號隊員衣服尺寸";
	$title[68]="5號隊員監護人";
	$title[69]="5號隊員就讀學校";
	$title[70]="5號隊員年級";
	$title[71]="5號隊員聯絡Email";
	$title[72]="5號隊員連絡電話";

	$title[73]="獎狀寄送地址";
	$title[74]="獎狀收件人名稱";
	$title[75]="報名費匯款人";
	$title[76]="報名費匯款後五碼";
	$title[77]="銀行";
	$title[78]="分行";
	$title[79]="帳號";
        $title[80]="需租借用品";
        $title[81]="已閱讀相關規定";

	$index[0]="pie_hidden_110";
	$index[1]="pie_hidden_111";
	$index[2]="pie_hidden_112";
	$index[3]="pie_hidden_113";
	$index[4]="pie_hidden_115";
	$index[5]="pie_hidden_114";
	$index[6]="pie_hidden_160";
	$index[7]="pie_hidden_161";
	$index[8]="pie_hidden_162";
	$index[9]="pie_hidden_163";
	$index[10]="pie_hidden_164";
	$index[11]="pie_hidden_165";
	$index[12]="pie_hidden_166";

	$index[13]="pie_hidden_116";
	$index[14]="pie_hidden_167";
	$index[15]="pie_hidden_117";
	$index[16]="pie_hidden_168";
	$index[17]="pie_hidden_170";
	$index[18]="pie_hidden_171";
	$index[19]="pie_hidden_118";
	$index[20]="pie_hidden_169";
	$index[21]="pie_hidden_119";
	$index[22]="pie_hidden_121";

	$index[23]="pie_hidden_122";
	$index[24]="pie_hidden_174";
	$index[25]="pie_hidden_123";
	$index[26]="pie_hidden_175";
	$index[27]="pie_hidden_176";
	$index[28]="pie_hidden_177";
	$index[29]="pie_hidden_124";
	$index[30]="pie_hidden_178";
	$index[31]="pie_hidden_125";
	$index[32]="pie_hidden_127";

	$index[33]="pie_hidden_128";
	$index[34]="pie_hidden_179";
	$index[35]="pie_hidden_129";
	$index[36]="pie_hidden_180";
	$index[37]="pie_hidden_181";
	$index[38]="pie_hidden_182";
	$index[39]="pie_hidden_130";
	$index[40]="pie_hidden_183";
	$index[41]="pie_hidden_131";
	$index[42]="pie_hidden_133";

	$index[43]="pie_hidden_134";
	$index[44]="pie_hidden_184";
	$index[45]="pie_hidden_135";
	$index[46]="pie_hidden_185";
	$index[47]="pie_hidden_186";
	$index[48]="pie_hidden_187";
	$index[49]="pie_hidden_136";
	$index[50]="pie_hidden_188";
	$index[51]="pie_hidden_137";
	$index[52]="pie_hidden_139";

	$index[53]="pie_hidden_140";
	$index[54]="pie_hidden_189";
	$index[55]="pie_hidden_141";
	$index[56]="pie_hidden_190";
	$index[57]="pie_hidden_191";
	$index[58]="pie_hidden_192";
	$index[59]="pie_hidden_142";
	$index[60]="pie_hidden_193";
	$index[61]="pie_hidden_143";
	$index[62]="pie_hidden_145";

	$index[63]="pie_hidden_146";
	$index[64]="pie_hidden_194";
	$index[65]="pie_hidden_147";
	$index[66]="pie_hidden_195";
	$index[67]="pie_hidden_196";
	$index[68]="pie_hidden_197";
	$index[69]="pie_hidden_148";
	$index[70]="pie_hidden_198";
	$index[71]="pie_hidden_149";
	$index[72]="pie_hidden_151";

	$index[73]="pie_hidden_152";
	$index[74]="pie_hidden_153";
	$index[75]="pie_hidden_154";
	$index[76]="pie_hidden_155";
	$index[77]="pie_hidden_156";
	$index[78]="pie_hidden_157";
	$index[79]="pie_hidden_158";
	$index[80]="pie_hidden_213";
        $index[81]="pie_hidden_172";

        $array["pie_hidden_110"] = $_POST[pie_hidden_110];
	$array["pie_hidden_111"] = $_POST[pie_hidden_111];
	$array["pie_hidden_112"] = $_POST[pie_hidden_112];
	$array["pie_hidden_113"] = $_POST[pie_hidden_113];
	$array["pie_hidden_114"] = $_POST[pie_hidden_114];
	$array["pie_hidden_115"] = $_POST[pie_hidden_115];
	$array["pie_hidden_116"] = $_POST[pie_hidden_116];
	$array["pie_hidden_117"] = $_POST[pie_hidden_117];
	$array["pie_hidden_118"] = $_POST[pie_hidden_118];
        $array["pie_hidden_119"] = $_POST[pie_hidden_119];
	$array["pie_hidden_120"] = $_POST[pie_hidden_120];
	$array["pie_hidden_121"] = $_POST[pie_hidden_121];
	$array["pie_hidden_122"] = $_POST[pie_hidden_122];
	$array["pie_hidden_123"] = $_POST[pie_hidden_123];
	$array["pie_hidden_124"] = $_POST[pie_hidden_124];
	$array["pie_hidden_125"] = $_POST[pie_hidden_125];
	$array["pie_hidden_126"] = $_POST[pie_hidden_126];
	$array["pie_hidden_127"] = $_POST[pie_hidden_127];
        $array["pie_hidden_128"] = $_POST[pie_hidden_128];
	$array["pie_hidden_129"] = $_POST[pie_hidden_129];
	$array["pie_hidden_130"] = $_POST[pie_hidden_130];
	$array["pie_hidden_131"] = $_POST[pie_hidden_131];
	$array["pie_hidden_132"] = $_POST[pie_hidden_132];
	$array["pie_hidden_133"] = $_POST[pie_hidden_133];
	$array["pie_hidden_134"] = $_POST[pie_hidden_134];
	$array["pie_hidden_135"] = $_POST[pie_hidden_135];
	$array["pie_hidden_136"] = $_POST[pie_hidden_136];
        $array["pie_hidden_137"] = $_POST[pie_hidden_137];
	$array["pie_hidden_138"] = $_POST[pie_hidden_138];
	$array["pie_hidden_139"] = $_POST[pie_hidden_139];
	$array["pie_hidden_140"] = $_POST[pie_hidden_140];
	$array["pie_hidden_141"] = $_POST[pie_hidden_141];
	$array["pie_hidden_142"] = $_POST[pie_hidden_142];
	$array["pie_hidden_143"] = $_POST[pie_hidden_143];
	$array["pie_hidden_144"] = $_POST[pie_hidden_144];
	$array["pie_hidden_145"] = $_POST[pie_hidden_145];
	$array["pie_hidden_146"] = $_POST[pie_hidden_146];
	$array["pie_hidden_147"] = $_POST[pie_hidden_147];
	$array["pie_hidden_148"] = $_POST[pie_hidden_148];
        $array["pie_hidden_149"] = $_POST[pie_hidden_148];
	$array["pie_hidden_150"] = $_POST[pie_hidden_150];
	$array["pie_hidden_151"] = $_POST[pie_hidden_151];
	$array["pie_hidden_152"] = $_POST[pie_hidden_152];
	$array["pie_hidden_153"] = $_POST[pie_hidden_153];
	$array["pie_hidden_154"] = $_POST[pie_hidden_154];
	$array["pie_hidden_155"] = $_POST[pie_hidden_155];
	$array["pie_hidden_156"] = $_POST[pie_hidden_156];
	$array["pie_hidden_157"] = $_POST[pie_hidden_157];
	$array["pie_hidden_158"] = $_POST[pie_hidden_158];
	$array["pie_hidden_159"] = $_POST[pie_hidden_159];

        $array["pie_hidden_160"] = $_POST[pie_hidden_160];
	$array["pie_hidden_161"] = $_POST[pie_hidden_161];
	$array["pie_hidden_162"] = $_POST[pie_hidden_162];
	$array["pie_hidden_163"] = $_POST[pie_hidden_163];
	$array["pie_hidden_164"] = $_POST[pie_hidden_164];
	$array["pie_hidden_165"] = $_POST[pie_hidden_165];
	$array["pie_hidden_166"] = $_POST[pie_hidden_166];
	$array["pie_hidden_167"] = $_POST[pie_hidden_167];
	$array["pie_hidden_168"] = $_POST[pie_hidden_168];
        $array["pie_hidden_169"] = $_POST[pie_hidden_169];
	$array["pie_hidden_170"] = $_POST[pie_hidden_170];
	$array["pie_hidden_171"] = $_POST[pie_hidden_171];
	$array["pie_hidden_172"] = $_POST[pie_hidden_172];
	$array["pie_hidden_173"] = $_POST[pie_hidden_173];
	$array["pie_hidden_174"] = $_POST[pie_hidden_174];
	$array["pie_hidden_175"] = $_POST[pie_hidden_175];
	$array["pie_hidden_176"] = $_POST[pie_hidden_176];
	$array["pie_hidden_177"] = $_POST[pie_hidden_177];
        $array["pie_hidden_178"] = $_POST[pie_hidden_178];
	$array["pie_hidden_179"] = $_POST[pie_hidden_179];
	$array["pie_hidden_180"] = $_POST[pie_hidden_180];
	$array["pie_hidden_181"] = $_POST[pie_hidden_181];
	$array["pie_hidden_182"] = $_POST[pie_hidden_182];
	$array["pie_hidden_183"] = $_POST[pie_hidden_183];
	$array["pie_hidden_184"] = $_POST[pie_hidden_184];
	$array["pie_hidden_185"] = $_POST[pie_hidden_185];
	$array["pie_hidden_186"] = $_POST[pie_hidden_186];
        $array["pie_hidden_187"] = $_POST[pie_hidden_187];
	$array["pie_hidden_188"] = $_POST[pie_hidden_188];
	$array["pie_hidden_189"] = $_POST[pie_hidden_189];
	$array["pie_hidden_190"] = $_POST[pie_hidden_190];
	$array["pie_hidden_191"] = $_POST[pie_hidden_191];
	$array["pie_hidden_192"] = $_POST[pie_hidden_192];
	$array["pie_hidden_193"] = $_POST[pie_hidden_193];
	$array["pie_hidden_194"] = $_POST[pie_hidden_194];
	$array["pie_hidden_195"] = $_POST[pie_hidden_195];
	$array["pie_hidden_196"] = $_POST[pie_hidden_196];
	$array["pie_hidden_197"] = $_POST[pie_hidden_197];
	$array["pie_hidden_198"] = $_POST[pie_hidden_198];
        $array["pie_hidden_199"] = $_POST[pie_hidden_199];
	$array["pie_hidden_200"] = $_POST[pie_hidden_200];
	$array["pie_hidden_201"] = $_POST[pie_hidden_201];
	$array["pie_hidden_202"] = $_POST[pie_hidden_202];
	$array["pie_hidden_203"] = $_POST[pie_hidden_203];
	$array["pie_hidden_204"] = $_POST[pie_hidden_204];
	$array["pie_hidden_205"] = $_POST[pie_hidden_205];
	$array["pie_hidden_206"] = $_POST[pie_hidden_206];
	$array["pie_hidden_207"] = $_POST[pie_hidden_207];
	$array["pie_hidden_208"] = $_POST[pie_hidden_208];
	$array["pie_hidden_209"] = $_POST[pie_hidden_209];
	$array["pie_hidden_210"] = $_POST[pie_hidden_210];
	$array["pie_hidden_211"] = $_POST[pie_hidden_211];
        $array["pie_hidden_213"] = $_POST[pie_hidden_213];
        $last5 = $array["pie_hidden_155"];

mysql_query("SET NAMES utf8");
mysql_query("SET character_set_results = 'utf8',
character_set_client = 'utf8',
character_set_connection = 'utf8',
character_set_database = 'utf8',
character_set_server = 'utf8'");


// Database Connection

$host="localhost";
$uname="power";
$pass="P@wer";
$database = "wordpress2";

$connection=mysql_connect($host,$uname,$pass);

echo mysql_error();

$selectdb=mysql_select_db($database) or
die("Database could not be selected");
$result=mysql_select_db($database)
or die("database cannot be selected <br>");

$sql2 = mysql_query("select meta_value from wp_usermeta where user_id=$user_id and meta_key='pie_hidden_110'");
    $user_name = mysql_fetch_array($sql2); //隊伍名稱

for($i=0;$i<=81;$i++){
	if($array["$index[$i]"]!=""){
	    $tmp_index = $index[$i];
		$tmp_index_value = $array[$index[$i]];
		$sql2 = mysql_query("select umeta_id from wp_usermeta where user_id='$user_id' and meta_key='$tmp_index'");
		$meta_exist = mysql_fetch_array($sql2);
		if($meta_exist[0]==""){
			mysql_query("INSERT INTO wp_usermeta (user_id,meta_key) SELECT '$user_id','$tmp_index'");
			$sql2 = mysql_query("UPDATE wp_usermeta SET meta_value='$tmp_index_value' where user_id=$user_id and meta_key='$tmp_index'");
		}
		else{
			$sql2 = mysql_query("UPDATE wp_usermeta SET meta_value='$tmp_index_value' where user_id='$user_id' and meta_key='$tmp_index'");
		}
	}
	$sql = mysql_query("select meta_value from wp_usermeta where user_id='$user_id' and meta_key='$index[$i]'");
	$last = mysql_fetch_array($sql);
	$content1[$index[$i]] = $last[0];
}

        $sql16 = mysql_query("select booking_status from wp_em_bookings where event_id='$evt' and booking_id in (select MAX(booking_id) from wp_em_bookings where event_id='$evt' and person_id='$user_id')");
        $bookingStat = mysql_fetch_array($sql16);
        $statTag = array("待審核","審核通過","被拒絕");

// 建立表格
?>

<form action="http://powertech.347.com.tw/?page_id=1815" method="post">
<h4>報名狀態</h4><input type="hidden" name="selectionIDX" value="<?php echo $evt; ?>"><input type="hidden" name="user_id" value="<?php echo $user_id; ?>"><select name="statTag">
<?php
for($i=0;$i<3;$i++){
  ?><option value="<?php echo ($i+1); ?>" <?php if($bookingStat[0]==$i) echo " selected"; ?> > <?php echo $statTag[$i]; ?></option><?php
}
?>
</select><input type="submit" name="btn" value="更動">
</form>
</br></br>
<table>
     <tr>
       <td></td>
       <td><h4>目前資料</h4></td>
       <td><h4>修改/新增資料</h4></td>
     </tr>     <tr>
       <td></td>
       <td></td>
       <td></td>
     </tr>
<tr><td colspan="3"><hr size="8px" align="center" width="100%"></td></tr>
<form action="http://powertech.347.com.tw/?page_id=1839&teamID=<?php echo $user_id; ?>&evnt=<?php echo $evt; ?>" method="post">
<?php
for($i=0;$i<=81;$i++){ if($i==1){}else{if($i==13 or $i==73){echo("<tr><td colspan=\"3\"><hr size=\"8px\" align=\"center\" width=\"100%\"></td></tr>");} ?>
	  <tr>
       <td><?php echo $title[$i]; ?></td>
       <td><?php echo $content1[$index[$i]]; ?></td>
       <td>
<?php
if($i==2){
echo("<select name=\"$index[$i]\" style=\"width:60%\">");?>
<option value=""></option>
<option value="Mini-Com國小組">Mini-Com國小組</option>
<option value="Mini-Com國中組">Mini-Com國中組</option>
<option value="Remo-Con國中組">Remo-Con國中組</option>
<option value="Remo-Con高中組">Remo-Con高中組</option>
</select>
<?php
}else if($i==81){
echo("<select name=\"$index[$i]\" style=\"width:60%\">");?>
<option value=""></option>
<option value="Yes,已詳閱相關說明">Yes,已詳閱相關說明</option>
<option value="No">No</option>
</select>
<?php
}else if($i==80){
if($content1[$index[$i]]=="Yes")
  echo("<input type=\"radio\" name=\"$index[$i]\" value=\"Yes\" checked>Yes<input type=\"radio\" name=\"$index[$i]\" value=\"No\">No");
else
  echo("<input type=\"radio\" name=\"$index[$i]\" value=\"Yes\">Yes <input type=\"radio\" name=\"$index[$i]\" value=\"No\" checked>No");
}else if($i==14 or$i==24 or $i==34 or$i==44 or $i==54 or $i==64){
echo("<select name=\"$index[$i]\" style=\"width:60%\">");?>
<option value=""></option>
<option value="男">男</option>
<option value="女">女</option>
</select>
<?php
}else if($i==17 or$i==27 or $i==37 or$i==47 or $i==57 or $i==67){
echo("<select name=\"$index[$i]\" style=\"width:60%\">");?>
<option value="" selected="true"></option>
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
<option value="XL">XL</option>
</select>
<?php
}else{
echo("<input type=\"text\" name=\"$index[$i]\" style=\"width:50%\">");}?>
</td></tr>
<?php
}}
?>
</table><input type="submit" name="SB" value="更新以上資料"></form>
<?
$logo_name="logo.jpg";
$account_name="account.jpg";

$logo_file=$_FILES['logo']['tmp_name'];
$logo_file_name=$_FILES['logo']['name'];

$account_copy_file=$_FILES['account_copy']['tmp_name'];
$account_copy_file_name=$_FILES['account_copy']['name'];

if($logo_file or $account_copy_file){
mkdir("/home/htdocs/powertech/htdocs/wordpress/wp-content/uploads/piereg_users_files/$user_id/", 0775);
$store_dir = "/home/htdocs/powertech/htdocs/wordpress/wp-content/uploads/piereg_users_files/$user_id/";// 上傳檔的儲存位置
$accept_overwrite = 1;//是否允許覆蓋相同檔

if(move_uploaded_file($logo_file,$store_dir.$logo_name)){
   $sql2 = mysql_query("UPDATE wp_usermeta SET meta_value='wp-content/uploads/piereg_users_files/$user_id/$logo_name' where user_id=$user_id and meta_key='pie_hidden_111'");
}
if($flag2 = move_uploaded_file($account_copy_file,$store_dir.$account_name)){
   $sql2 = mysql_query("UPDATE wp_usermeta SET meta_value='wp-content/uploads/piereg_users_files/$user_id/$account_name' where user_id=$user_id and meta_key='pie_hidden_159'");
}

}
?>

<form action="#" method="post" enctype="multipart/form-data">
<table>
<tr><td width="15%">影像名稱</td><td><center>已登錄資料</center></td><td>新增/修改資料</td></tr>
<tr><td width="15%">創意造型照片:</td><td>
<?php
   if(file_exists("/home/htdocs/powertech/htdocs/wordpress/wp-content/uploads/piereg_users_files/$user_id/$logo_name")){
       echo("<center><img src=\"wp-content/uploads/piereg_users_files/$user_id/$logo_name\" width=\"80%\" height=\"80%\" align=\"middle\"></center>");
   }
   else{
       echo("<center><img src=\"wp-content/uploads/piereg_users_files/admin/noimage.jpg\" width=\"80%\" height=\"80%\" align=\"middle\"></center>");
   }
?>
</td><td><input type="file" name="logo" id="logo_file"/></td></tr>
<tr><td width="15%">團隊帳戶影本:</td><td>
<?php
   if(file_exists("/home/htdocs/powertech/htdocs/wordpress/wp-content/uploads/piereg_users_files/$user_id/$account_name")){
       echo("<center><img src=\"wp-content/uploads/piereg_users_files/$user_id/$account_name\" width=\"80%\" height=\"80%\" align=\"middle\"></center>");
   }
   else{
       echo("<center><img src=\"wp-content/uploads/piereg_users_files/admin/noimage.jpg\" width=\"80%\" height=\"80%\" align=\"middle\"></center>");
   }
?>
</td><td><input type="file" name="account_copy" id="logo_file"/></td></tr>
</table>
*上傳影像大小請勿大於3MB
<input type="submit" name="submit" value="上傳檔案"/></form>
