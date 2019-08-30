<section class="programsList">
	<div class="container">
		<div class="row">
			<div class="programsTitleBlock col-12 text-center">
				<h1>ПРОГРАММЫ</h1>
      		</div>
     			<?php
     				getPrograms("col-sm-4 col-md-3 d-none d-sm-block", "1000");
     				getPrograms("col-6 d-sm-none", "2");
            $mysqli->close();
     			?>
      		<div class="col-12 d-sm-none allPrograms">
      			<a href="programs.php">ПРОСМОТРЕТЬ ВСЕ</a>
      		</div>
		</div>
	</div>
</section>