select last_name, first_name, date(birthdate) as 'birthdate' from user_card 
	where year(birthdate) = 1985 
		order by last_name ;
