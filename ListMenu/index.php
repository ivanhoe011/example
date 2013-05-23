<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery use json data</title>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="ajax.js" ></script>
</head>

<body onload="Add();">
<label for="Proviance">จังหวัด</label>
<select name="Proviance" id="Proviance">
</select>
<label for="ProID">รหัสจังหวัด</label>
<input type="text" name="ProID" id="ProID" />
<p>
  <label for="District">อำเภอ</label>
  <select name="District" id="District">
  </select>
  <label for="DisID">รหัสอำเภอ</label>
  <input type="text" name="DisID" id="DisID" />
</P>
<p>
  <label for="Subdistrict">ตำบล</label>
  <select name="Subdistrict" id="Subdistrict">
  </select>
  <label for="SubID">รหัสตำบล</label>
  <input type="text" name="SubID" id="SubID" />
</P>
<p>
  <label for="Postcode">รหัสไปรษณีย์</label>
  <select name="Postcode" id="Postcode">
  </select>
  <label for="PostID">รหัสไปรษณีย์</label>
  <input type="text" name="PostID" id="PostID" />
</P>
</body>
</html>