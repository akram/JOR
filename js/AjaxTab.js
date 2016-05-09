	function getXhr(){
                                var xhr = null; 
				if(window.XMLHttpRequest) // Firefox et autres
				   xhr = new XMLHttpRequest(); 
				else if(window.ActiveXObject){ // Internet Explorer 
				   try {
			                xhr = new ActiveXObject("Msxml2.XMLHTTP");
			            } catch (e) {
			                xhr = new ActiveXObject("Microsoft.XMLHTTP");
			            }
				}
				else { // XMLHttpRequest non supporté par le navigateur 
				   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
				   xhr = false; 
				} 
                                return xhr;
			}
 
			/**
			* Méthode qui sera appelée sur le click du bouton
			*/
			function go(){
				var xhr = getXhr();
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						leselect = xhr.responseText;
						// On se sert de innerHTML pour rajouter les options a la liste
						document.getElementById('tab_user').innerHTML = leselect;
					}
				}
 
				// Ici on va voir comment faire du post
				xhr.open("POST","../Controleur/AjaxSearch.php",false);
				// ne pas oublier ça pour le post
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');				
			
				if(document.getElementById('radio1').checked){
					type="name";
				}
				else if(document.getElementById('radio2').checked){
					type="first_name";
				}
				else if(document.getElementById('radio3').checked){
					type="mail";
				}
				else{
					type="telephone";
				}
				search_text=document.getElementById('search').value;
				xhr.send("search="+search_text+"&type="+type);
			}
			
function add_entry()
{
popup = window.open('', 'popup', 'height=220, width=420');
popup.document.write('<form action="../Controleur/addContact.php" method="post" onsubmit=self.close();>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Name: </label><input type="text" id="Name" name="Name" /></div>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Firt Name: </label><input type="text" id="First_Name" name="First_Name" /></div>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Mail: </label><input type="text" id="mail" name="mail" /></div>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Tel: </label><input type="text" id="tel" name="tel" /></div>');
popup.document.write('<div style="margin-left:76%"><input style="text-align:right;display:inline-block;" type="submit" value="Add" onclick="opener.location.reload();" /></div>');
popup.document.write('</form>');
}


function modify_entry(name,first,mail,tel,id){
popup = window.open('', 'popup', 'height=220, width=420');
popup.document.write('<form  action="../Controleur/modifyContact.php?id='+id+'" method="post" onsubmit=self.close();>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Name: </label><input type="text" id="Name" name="Name" value="'+name+'"/></div>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Firt Name: </label><input type="text" id="First_Name" name="First_Name" value="'+first+'" /></div>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Mail: </label><input type="text" id="mail" name="mail" value="'+mail+'"/></div>');
popup.document.write('<div><label style="display:inline-block;width: 250px;text-align: right;">Tel: </label><input type="text" id="tel" name="tel" value="'+tel+'"/></div>');
popup.document.write('<div style="margin-left:76%"><input style="text-align:right;display:inline-block;" type="submit" value="Modify" onclick="opener.location.reload();" /></div>');
popup.document.write('</form>');	
}