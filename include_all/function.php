
<script type="text/javascript">

function m1()
{
	m_id = document.getElementById("m_id")
	m_p1 = document.getElementById("m_password1")
	m_p2 = document.getElementById("m_password2")
	m_name= document.getElementById("m_name")
	m_ph1= document.getElementById("m_phone1")
	m_ph2= document.getElementById("m_phone2")
	m_ph3= document.getElementById("m_phone3")
	m_email= document.getElementById("m_email")

	m_id_len = m_id.value.length
	m_p1_len = m_p1.value.length
	m_p2_len = m_p2.value.length

	m_name_len = m_name.value.length

	m_ph1_len = m_ph1.value.length
	m_ph2_len = m_ph2.value.length
	m_ph3_len = m_ph3.value.length

	m_email_len = m_email.value.length


	if (m_id.value == "") { 
		alert("아이디를 입력해주세요");
		return false;
	} else {
		if (m_id_len <=3 || m_id_len >=9)
		{
			alert('아이디는 4~8자리 사이로 입력해주세요');
			return false;
		}
	}

	if (m_p1.value == "")
	{
		alert("비밀번호를 입력해주세요");
		return false;
	} else {
		if (m_p1_len <=3 || m_p1_len >= 9)
		{
			alert('비밀번호는 4~8자리 사이로 입력해주세요');
			return false;
		}
	}

	if (m_p2.value == "")
	{
		alert("비밀번호확인을 입력해주세요");
		return false;
	} else {
		if (m_p1_len !== m_p2_len)
		{
			alert('비밀번호와 비밀번호확인 입력 값이 서로 다릅니다');
			return false;
		}
	}
	
	if (m_name_len == "")
	{
		alert("이름을 입력해주세요");
		return false;
	}


	if (m_ph1.value == "" || m_ph2.value == "" || m_ph3.value == "")
	{
		alert("핸드폰번호를 입력해주세요");
		return false;
	} else {
		ph_chk = "N";

		if (m_ph1_len <=1 || m_ph1_len >= 5) { 
			ph_chk = "Y";
		}

		if (m_ph2_len <= 2 || m_ph2_len >= 5 ) {
			ph_chk = "Y";
		}

		if (m_ph3_len !== 4) {
			ph_chk = "Y";
		}

		if (ph_chk == "Y")
		{
			alert('전화번호 앞2~4자리,중간3~4자리,끝4자리를 올바르게 입력해주세요');
			return false;
		}
	}

	if(m_email_len == "" || m_email_len == "")
	{
		alert('이메일을 정확하게 입력해주세요')
		return false;
	} 

}

//<!-- function m_email_all() -->
//<!-- { -->
//<!--  -->
//<!-- var a = document.getElementById('m_email2') -->
//<!-- var b = document.getElementById('m_email3') -->
//<!--  -->
//<!--    if (a.value == "직접입력" ) { -->
//<!--       b.style.display = "block"; -->
//<!--    }  else { -->
//<!--       b.style.display = "none"; -->
//<!--    } -->
//<!-- } -->
//<!--  -->
//<!--  -->
//<!--  -->
//<!--  -->
//<!-- <tr> -->
//<!-- 	<td class="td_center">이메일</td> -->
//<!-- 	<td class="td_center"><input name="m_email1" size="7px" type="text" id="m_email1"> 					 -->
//<!-- 		<select name="m_email2" id="m_email2" onchange="m_email_all()"> -->
//<!-- 			<option value="@선택하세요">@선택하세요</option> -->
//<!-- 			<option value="@naver.com">@naver.com</option> -->
//<!-- 			<option value="@daum.net">@daum.net</option> -->
//<!-- 			<option value="직접입력">직접입력</option> -->
//<!-- 		</select> -->
//<!-- 		<input name='m_email3' size='8px' type='text' id='m_email3' style="display:none;"> -->
//<!-- 	</td> -->
//<!-- </tr> -->

</script>

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
