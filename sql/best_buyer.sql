# get best buyer;
SELECT customers.id, customers.name FROM orders
  INNER JOIN customers
  ON customers.id = orders.cust_id
    GROUP BY orders.cust_id
      ORDER BY sum(orders.sum_pay) DESC LIMIT 1;