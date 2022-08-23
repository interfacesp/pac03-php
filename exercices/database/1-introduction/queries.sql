/**
Instructions: Testez les requêtes suivantes dans l'éditeur sur
W3Schools:

https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_all


*/

/**
Quels les sont tous les clients ? 
*/


SELECT *
FROM Customers;


/**
- Combien de Clients en tout ?
*/

SELECT count(*)
FROM Customers;



/*
- Quels sont les Clients Allemands ? 
*/

SELECT *
from Customers
where Country = 'Germany';


/*
- Quels sont les Clients Mexicains ? 
*/

SELECT *
from Customers
where Country = 'Mexico';


/*
- Quels sont les Clients Français ? (à vous de l'écrire)
*/

SELECT *
FROM Customers
WHERE Country = 'France'; 


/*
- Combien y a-t-il de clients Français en tout (à vous de l'écrire) ? 
*/

SELECT COUNT(*)
FROM Customers
WHERE Country = 'France';
/*
- Quel(s) client(s) habite à "Rua do Mercado, 12"? 
*/

SELECT *
FROM Customers
Where Address = 'Rua do Mercado, 12';

/*
- Combien de Produits en tout  ?
*/

select *
from products;

/*
- Quels sont les produits dont le prix dépasse 30 ?

*/

select *
from products
where price > 30;

/*
- Quels sons les produits dont le prix est plus petit que 10 (à vous) ?  
*/

SELECT *
FROM products
WHERE price < 10;


/*
- Quels sont les produits de la catégorie "Boissons"?
*/

select ProductName
from products
where categoryID = 1;


/*
- Combien de commandes en tout (à vous)? 
*/

SELECT count(*)
FROM Orders;


/*
- Quels sont les commandes passées en 1996 ? Combien y en a-t-il ? 
*/

select *
from orders 
where OrderDate = '1996%';


/*
- Quelles sont les commandes du client "Hanari Carnes" ( à vous) ?
*/

SELECT *
FROM Customers, Orders
WHERE Orders.CustomerID = Customers.CustomerID
    AND Customers.CustomerName = 'Hanari Carnes';

