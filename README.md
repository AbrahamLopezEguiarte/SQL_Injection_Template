# SQL Injection template
This is a template for SQL Injection created only for educational purposes, the use of this for other purposes is the responsibility of the user.
If you're trying to learn and practice SQL Injection then you should already know that, in most cases, you won't be able to apply any other statement rather than SELECT. This is because most websites are currently using mysqli which will prevent attackers from using other statements such as INSERT, UPDATE or DELETE by limiting the number of queries to one, being most of the time a SELECT query.
With this template you'll be able to use your own database to learn about SQL Injection by practicing how to retrieve information but most important, how to take advantage of a bad implementation of multi_query by using diverse kind of statements such as SELECT, INSERT, UPDATE and DELETE to directly affect the database, something you can't do in most controlled environments.

# How to use
First of all you'll need to use Laragon or XAMPP to use these php files. Once you've done this everything will be a piece of cake.
All you need to do is create a new database in MySQL and a table named "login". The columns this new table will have are "username" and "pass". Now you just have to create new instances for this and finally add the database's name in the connnection file.

# SQL statements you can use
Since this is a template for learning SQL Injection you're able to do everything SQL let's you.
As a first approach you can type "1' or 1=1#" in the username's input to retrieve all instances from the table login. To use multiple SQL queries you may type "1'; QUERY_1; QUERY_2; QUERY_N#".