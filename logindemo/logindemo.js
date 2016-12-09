	function submit() {
	    var req = new XMLHttpRequest();
	    var username = document.querySelector('#namea').value;
	    var password = document.querySelector('#keyworda').value;
	    req.open('POST', 'submit1.php', true);
	    req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	    req.send('username=' + username + '&password=' + password);
	    req.onreadystatechange = function () {
	        if (req.readyState === 4 && req.status === 200) {
	            document.querySelector('.php').innerHTML = req.responseText;
	            console.log(req.getAllResponseHeaders());
	        }
	    }
	}
	function register () {
		var req = new XMLHttpRequest();
	    var username = document.querySelector('#nameb').value;
	    var password = document.querySelector('#keywordb').value;
	    req.open('POST', 'login1.php', true);
	    req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	    req.send('username=' + username + '&password=' + password);
	    req.onreadystatechange = function () {
	        if (req.readyState === 4 && req.status === 200) {
	            document.querySelector('.php').innerHTML = req.responseText;
	            console.log(req.getAllResponseHeaders());
	        }
	    }
	}
	function login() {
		var sub=document.getElementById('sub');
		var login=document.getElementById('login');
		sub.style.display='none';
		login.style.display='block';
		}
	function reg() {
		var sub=document.getElementById('sub');
		var login=document.getElementById('login');
		sub.style.display='block';
		login.style.display='none';
		}