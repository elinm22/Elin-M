
		var con=document.getElementById("Contact");
		//var btnsurah = document.getElementById("btnsurah");
			//btnsurah.addEventListener("click",function()
			//{
			var ourRequest = new XMLHttpRequest();
				ourRequest.open('GET','contact.json');
				ourRequest.onload=function() {
					var ourData = JSON.parse(ourRequest.responseText);
					//console.log(ourData[7].nama);
					renderHTML(ourData);
					};
					ourRequest.send();
				
			//});
		function renderHTML(data) {
			var htmlstring = "";
			for (ke=0;ke<data.length;ke++) {
				htmlstring +="<strong>"+data[ke].nama+"</strong>"
							+"<br> <b>Address</b>: "+data[ke].alamat
							+"<br> <b>Phone</b>: <a href='https://api.whatsapp.com/send?phone="+data[ke].tel+"'>"+data[ke].tel+"</a>"
							+"<br>"+"<br>"
					;
			}
			con.insertAdjacentHTML('beforeend',htmlstring);
			var br = "<br>";
			con.insertAdjacentHTML('beforeend',br);
		}