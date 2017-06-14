select substring(reverse(phone_number), 1, length (phone_number) -1) as 'rebmunenohp'
	from distrib
		where phone_number like '05%';
