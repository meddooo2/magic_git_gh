<html>
<head>
	<title>git</title>
</head>
<body>
	<h1>Index fajlll promjena </h1>
	<p>prvo je potrebno da kazes da si korisnik i uneses ime i email</p>

	<h1>komande</h1>
	<ul>
		<li><a href="#">git config --global user.name "medo"</a></li>
		<li><a href="#">git config --global user.email medd@com</a></li>
		<li><a href="#">git init</a></li>
		<li><a href="#">git status</a></li>
		<li><a href="#">git log</a></li>
		<li><h3>Dodavanje duagacko</h3></li>
		
		<li><a href="#">git add --all</a></li>
		<li><a href="#">git commit  </a> otvara se vim upises poruku pa :wq</li>

		<li><h3>Skaraćeno dodavanje</h3></li> 
		<li><a href="#">git commit  -a -m "adsadsad" </a></li>
		<li><h3>da vidis promjene</h3></li>
		<li><a href="#">git show </a></li>
		<li><a href="#">git show "karakteri naziva"</a></li>
		<li><h3>GRANANJE</h3></li>
		<li><a href="#">git branch test </a></li>
		<li><a href="#">git branch -D test # brisanje</a></li>
		<li><a href="#">git merge test </a></li>
		<li><a href="#">git mergetool </a></li>
		<li><a href="#">git ***** </a></li>
		<li><h3>vracanje</h3></li>
 		<li><a href="#">git  revert "id.."   # napravice novi comit a checkout nece</a></li>
		<li><a href="#">git  checkout --index.php  # varati verziju index fajla iz head</a></li>
		<li><a href="#">git  checkout id... index.php  # varati verziju zavisno od id</a></li>
		<li><a href="#">git  checkout id...   # varati verziju svih fajlova na posebnoj grani</a></li>
		<li><a href="#">git  reset --hard</a></li>
		<li><a href="#">git reflog # prikazuje sve sta sam radjo ne samo comite</a></li>
		<li><h3>bisect -binarna pretraga za greskom</h3></li>
		<li><a href="#">git bisect good id... # komit u kom sigurno nema greske</a></li>
		<li><a href="#">git bisect bad HEAD # </a></li>
		<li><a href="#">git bisect start # </a></li>
		<li><a href="#">git bisect bad # ako nisi naso bug</a></li>
		<li><a href="#">git bisect good # ako si naso posle mozes da sačuvas kao novu granu pa da eventualno spojis sa master</a></li>
		<li><a href="#">git bisect reset # brise bisect granu i vraca te na master</a></li>
	</ul>


	<h1>bash komande korisno</h1>
	<ul>
		<li>ls -la</li>
	</ul>

	<div id="commit">Moze da se odradi na više nacina</div>	
</body>
</html>