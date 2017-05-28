# get best buyer for every month
SELECT  any_value(month) AS month, max(sum_pay) AS sum_pay, any_value(name) AS name FROM
  (
  SELECT sum(orders.sum_pay) as sum_pay, customers.name as name, substr(orders.date, 1, 7) as month FROM orders
    INNER JOIN customers
    ON orders.cust_id = customers.id
      GROUP BY name, month
        ORDER BY month
  ) AS sub_sum_pay
    GROUP BY month;