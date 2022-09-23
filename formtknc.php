<?php
echo'
<center><form class="form-inline mx-5 my-lg-0" action ="index.php" method="get">
		<div class="form-inline__input">
			<div>Giá từ: <input class="form-control mr-sm-2" type="text" placeholder="Nhập giá..." name="tu" id="giatu"></div>
			<div>Giá đến: <input class="form-control mr-sm-2" type="text" placeholder="Nhập giá..." name="den" id="giaden"></div>
		</div>
'?>
	<!-- <div>&nbsp <input type="radio" name ="gia" value="giam">&nbsp Từ cao đến thấp</div>
	<div>&nbsp <input type="radio" name ="gia" value="tang">&nbsp Từ thấp đến cao </center></div> -->
<?php
echo'
		<center>
		<div class="filter">
			<label class="btn_link">Thương hiệu:</label> &nbsp 
			<input class="filter__input" type="radio" name ="theloai" value="samsung" style="cursor: pointer">&nbsp Samsung
			&nbsp <input class="filter__input" type="radio" name ="theloai" value="nokia" style="cursor: pointer">&nbsp Nokia
			&nbsp <input class="filter__input" type="radio" name ="theloai" value="iphone" style="cursor: pointer">&nbsp Iphone
			&nbsp <input class="filter__input" type="radio" name ="theloai" value="sony" style="cursor: pointer">&nbsp Sony
			&nbsp <input class="filter__input" type="radio" name ="theloai" value="oppo" style="cursor: pointer">&nbsp Oppo
			&nbsp <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Duyệt" onClick="return ktttkc();">
		</div>
	</form>
	</center>'
?>