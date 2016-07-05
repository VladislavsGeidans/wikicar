<?php
		function image($info)
		{
			$images = explode(";", $info);
			if (count($images) <= 1)
			{
				echo "<img src='../carimg/".$images[0].".jpg'><br> ";
			}
			else
			{
  				for ($i = 0; $i <= count($info); $i++)
  				{
    				echo "<img src='../carimg/".$images[$i].".jpg' width='500' height='400' ><br> ";
  				} 
			}
		}		

		function images($info)
		{
			$image = explode(";", $info);
			if (count($image) <= 1)
			{
				echo "<img src='../zapimg/".$image[0].".jpg'><br> ";
			}
			else
			{
  				for ($i = 0; $i <= count($info); $i++)
  				{
    				echo "<img src='../zapimg/".$image[$i].".jpg' ><br> ";
  				} 
			}
		}