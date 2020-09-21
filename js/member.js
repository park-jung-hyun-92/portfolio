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