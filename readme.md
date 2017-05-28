# Test case for PDFfiller

## tasks:

We have tables:
customers (id, name)
orders (id, cust_id, date, sum_pay)
-----------------------------------
SQL tasks:
1) get best customer
2) get best buyer for every month

===================================
PHP task:
rewrite json_encode() function without reсursion

## to run PHP task test

enter in terminal in a project directory:
$ php vendor/bin/phpunit --bootstrap JsonHandler.php tests/JsonHandlerTest
