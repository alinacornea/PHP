select count(id_film) as 'movies' from member_history
	where date between 10-30-2006 and 07/27/2007 or month(date) = 12 and day(date) = 24;
