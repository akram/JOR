<!DOCTYPE html>
<html lang="en">


<head>
<script>function modify_entry(name,first,mail,tel){
popup = window.open('', 'popup', 'height=220, width=420');
popup.document.write('<form  method="post" onsubmit=self.close();>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Name: </label><input type="text" id="Name" name="Name" placeholder="'+name+'"/></div>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Firt Name: </label><input type="text" id="First_Name" name="First_Name" placeholder="'+first+'" /></div>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Mail: </label><input type="text" id="mail" name="mail" placeholder="'+mail+'"/></div>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Tel: </label><input type="text" id="tel" name="tel" placeholder="'+tel+'"/></div>');
popup.document.write('<div style="margin-left:76%"><input style="text-align:right;display:inline-block;" type="submit" value="Add" onclick="opener.location.reload();" /></div>');
popup.document.write('</form>');	
}
</script>

</head>


<body>

<a href="javascript:modify_entry('a','b','c','d')">Test</a>

</body>
</html>