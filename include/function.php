<?php 
function page_avg($total_page, $page_num, $page, $src_name, $src_value, $url)
	{
//		$url="/ds_notice/n_list_1.php?url=ds_notice_admin/n_list_1.php"; //페이지파일명 정의
		$total_block=ceil($total_page/$page_num); 

//		echo $total_block;
//		echo '<br>';

		$block=ceil($page/$page_num); //현재 블록(보여질페이지까지가 1번블록 > 화살표 다음이 2번블록)
		
//		echo $block;
//		echo '<br>';
		  
		$first=($block-1)*$page_num; // 페이지 블록이 시작하는 첫 페이지 
		
//		echo $first;
//		echo '<br>';
		
		$last=$block*$page_num; //페이지 블록의 끝 페이지 
		
//		echo $last;
		  
		if($block >= $total_block) { 
			$last=$total_page; 

//			echo $total_page;
//			echo '<br>';

		} 
	  
		echo "<p align='center' style='background-color: #f7f7f7; padding:20px;'>"; 
		//[처음][*개앞] 
		if($block > 1) { 
			$prev=$first-1; 
			echo "<a href='$url&page=1&src_name=$src_name&src_value=$src_value'>
						<font color='green' style='border: solid 1px; background-color: #fff; color: #0d0d0d; padding:5px 10px;'>1</font></a>"; 
			echo "<a href='$url&page=$first&src_name=$src_name&src_value=$src_value'> ◀ </a>"; 
//		echo '<br>';
//		echo $block;
		}
		
		//[이전] 
		if($page > 1) { 
			$go_page=$page-1; 
//		    echo "  <a href='$url&page=$go_page&src_name=$src_name&src_value=$src_value'>◀◀</a>&nbsp;"; 
//		   echo '<br>';
//		echo $go_page;
		} 
	  
		//페이지 링크 
		for ($page_link=$first+1;$page_link<=$last;$page_link++) { 
			if($page_link==$page) { 
				   echo "<font color='green' style='border: solid 1px; background-color: #fff; color: #03c75a; padding:5px 10px;'><b>$page_link</b></font>"; 
//			echo '<br>';
//			echo $first;
//			echo '<br>';
//			echo $last;
//			echo '<br>';
//			echo $page_link;
//			echo '<br>';
			} 
			else { 
				   echo "<a href='$url&page=$page_link&src_name=$src_name&src_value=$src_value'>
								<font color='green' style='border: solid 1px; background-color: #fff; color: #0d0d0d; padding:5px 10px;'>$page_link</font></a>";
			} 
		} 
	  
		//[다음] 
		if($total_page > $page) { 
			$go_page=$page+1; 
//		    echo "&nbsp;<a href='$url&page=$go_page&src_name=$src_name&src_value=$src_value'>▶▶</a>"; 
//		echo '<br>';
//		echo $go_page;
		} 
	  
		//[*개뒤][마지막] 
		if($block < $total_block) { 
			$next=$last+1; 
		  echo "<a href='$url&page=$next&src_name=$src_name&src_value=$src_value'> ▶ </a>"; 
			echo "<a href='$url&page=$total_page&src_name=$src_name&src_value=$src_value'>
				<font color='green' style='border: solid 1px; background-color: #fff; color: #0d0d0d; padding:5px 10px;'>$total_page</font></a></p>"; 
		echo '<br>';
//		echo $next;
		} 
	}
?>
