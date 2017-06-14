SELECT UPPER(last_name) as 'NAME', first_name, price 
	FROM user_card INNER JOIN  member on user_card.id_user = member.id_user_card
		INNER JOIN subscription on member.id_sub = subscription.id_sub 
			WHERE subscription.price > 42 
				ORDER by last_name, first_name ;
